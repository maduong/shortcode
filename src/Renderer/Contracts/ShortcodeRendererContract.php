<?php namespace Edutalk\Base\Shortcode\Renderer\Contracts;

interface ShortcodeRendererContract
{
    /**
     * @var \Edutalk\Base\Shortcode\Compilers\Shortcode $shortcode
     * @var string $content
     * @var \Edutalk\Base\Shortcode\Compilers\ShortcodeCompiler $compiler
     * @var string $name
     */
    public function handle($shortcode, $content, $compiler, $name);
}
