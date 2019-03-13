<?php
/**
 * Created by PhpStorm.
 * User: NHZEXG
 * Date: 2019/3/12
 * Time: 18:54
 */

namespace App;

use Exception;
use Illuminate\Contracts\Debug\ExceptionHandler as DebugExceptionHandler;

class ExceptionHandler implements DebugExceptionHandler
{

    /**
     * Report or log an exception.
     *
     * @param  \Exception $e
     * @return void
     */
    public function report(Exception $e)
    {
        // TODO: Implement report() method.
        throw $e;
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Exception               $e
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function render($request, Exception $e)
    {
        // TODO: Implement render() method.
        throw $e;
    }

    /**
     * Render an exception to the console.
     *
     * @param  \Symfony\Component\Console\Output\OutputInterface $output
     * @param  \Exception                                        $e
     * @return void
     */
    public function renderForConsole($output, Exception $e)
    {
        // TODO: Implement renderForConsole() method.
        throw $e;
    }
}
