<?php 

namespace Ameronix\LaravelBladeStringCompiler;

use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\View\Compilers\CompilerInterface;

class StringViewCompiler extends BladeCompiler implements CompilerInterface
{
    public function __construct($filesystem, $cache_path)
    {
        parent::__construct($filesystem, $cache_path);
    }

    /**
     * Determine if the given view is expired.
     *
     * @param  string  $path
     * @return bool
     */
    public function isExpired($path)
    {
        return true;
    }

    /**
     * Compile the view at the given path.
     *
     * @param  string  $path
     * @return void
     */
    public function compile($path)
    {
        $contents = $this->compileString($path);

        if (!is_null($this->cachePath))
        {
            $this->files->put($this->getCompiledPath($path), $contents);
        }

        return $contents;
    }
}
