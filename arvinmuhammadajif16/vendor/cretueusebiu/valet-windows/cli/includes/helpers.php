<?php

namespace Valet;

use Exception;
use Illuminate\Container\Container;
use RuntimeException;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Output\ConsoleOutput;

if (! isset($_SERVER['HOME'])) {
    $_SERVER['HOME'] = $_SERVER['USERPROFILE'];
}

$_SERVER['HOME'] = str_replace('\\', '/', $_SERVER['HOME']);

/*
 * Define the ~/.config/valet path as a constant.
 */
define('VALET_HOME_PATH', $_SERVER['HOME'].'/.config/valet');
define('VALET_SERVER_PATH', str_replace('\\', '/', realpath(__DIR__.'/../../server.php')));
define('VALET_STATIC_PREFIX', '41c270e4-5535-4daa-b23e-c269744c2f45');

define('VALET_LEGACY_HOME_PATH', $_SERVER['HOME'].'/.valet');

/**
 * Output the given text to the console.
 *
 * @param  string  $output
 * @return void
 */
function info($output)
{
    output('<info>'.$output.'</info>');
}

/**
 * Output the given text to the console.
 *
 * @param  string  $output
 * @return void
 */
function warning($output)
{
    if (isset($_ENV['APP_ENV']) && $_ENV['APP_ENV'] === 'testing') {
        throw new RuntimeException($output);
    }

    output('<fg=red>'.$output.'</>');
}

/**
 * Output the given text to the console.
 *
 * @param  string  $output
 * @return void
 */
function error(string $output)
{
    if (isset($_ENV['APP_ENV']) && $_ENV['APP_ENV'] === 'testing') {
        throw new RuntimeException($output);
    }

    (new ConsoleOutput)->getErrorOutput()->writeln("<error>$output</error>");
}

/**
 * Output a table to the console.
 *
 * @param  array  $headers
 * @param  array  $rows
 * @return void
 */
function table(array $headers = [], array $rows = [])
{
    $table = new Table(new ConsoleOutput());

    $table->setHeaders($headers)->setRows($rows);

    $table->render();
}

/**
 * Output the given text to the console.
 *
 * @param  string  $output
 * @return void
 */
function output($output)
{
    if (isset($_ENV['APP_ENV']) && $_ENV['APP_ENV'] === 'testing') {
        return;
    }

    (new ConsoleOutput())->writeln($output);
}

if (! function_exists('resolve')) {
    /**
     * Resolve the given class from the container.
     *
     * @param  string  $class
     * @return mixed
     */
    function resolve($class)
    {
        return Container::getInstance()->make($class);
    }
}

/**
 * Swap the given class implementation in the container.
 *
 * @param  string  $class
 * @param  mixed  $instance
 * @return void
 */
function swap($class, $instance)
{
    Container::getInstance()->instance($class, $instance);
}

if (! function_exists('retry')) {
    /**
     * Retry the given function N times.
     *
     * @param  int  $retries
     * @param  callable  $retries
     * @param  int  $sleep
     * @return mixed
     */
    function retry($retries, $fn, $sleep = 0)
    {
        beginning:
        try {
            return $fn();
        } catch (Exception $e) {
            if (! $retries) {
                throw $e;
            }

            $retries--;

            if ($sleep > 0) {
                usleep($sleep * 1000);
            }

            goto beginning;
        }
    }
}

/**
 * Verify that the script is currently running as "sudo".
 *
 * @return void
 */
function should_be_sudo()
{
    if (! isset($_SERVER['SUDO_USER'])) {
        throw new Exception('This command must be run with sudo.');
    }
}

if (! function_exists('tap')) {
    /**
     * Tap the given value.
     *
     * @param  mixed  $value
     * @param  callable  $callback
     * @return mixed
     */
    function tap($value, callable $callback)
    {
        $callback($value);

        return $value;
    }
}

if (! function_exists('ends_with')) {
    /**
     * Determine if a given string ends with a given substring.
     *
     * @param  string  $haystack
     * @param  string|array  $needles
     * @return bool
     */
    function ends_with($haystack, $needles)
    {
        foreach ((array) $needles as $needle) {
            if (substr($haystack, -strlen($needle)) === (string) $needle) {
                return true;
            }
        }

        return false;
    }
}

if (! function_exists('starts_with')) {
    /**
     * Determine if a given string starts with a given substring.
     *
     * @param  string  $haystack
     * @param  string|string[]  $needles
     * @return bool
     */
    function starts_with($haystack, $needles)
    {
        foreach ((array) $needles as $needle) {
            if ((string) $needle !== '' && strncmp($haystack, $needle, strlen($needle)) === 0) {
                return true;
            }
        }

        return false;
    }
}

/**
 * Get the user.
 *
 * @return string
 */
function user()
{
    if (! isset($_SERVER['SUDO_USER'])) {
        if (! isset($_SERVER['USER'])) {
            return $_SERVER['USERNAME'];
        }

        return $_SERVER['USER'];
    }

    return $_SERVER['SUDO_USER'];
}
