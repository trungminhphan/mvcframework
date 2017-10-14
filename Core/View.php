<?php

namespace Core;
/**
 * View
 *
 * PHP version 7.0
 */
class View {

    /**
     * Render a view file
     *
     * @param string $view  The view file
     * @param array $args  Associative array of data to display in the view (optional)
     *
     * @return void
     */
    public static function render($view, $args = [])
    {
        extract($args, EXTR_SKIP);

        $file = dirname(__DIR__) . "/App/Views/$view";  // relative to Core directory

        if (is_readable($file)) {
            require $file;
        } else {
            throw new \Exception("$file not found");
        }
    }

    /**
     * Render a view template using Twig
     *
     * @param string $template  The template file
     * @param array $args  Associative array of data to display in the view (optional)
     *
     * @return void
     */
    public static function renderTemplate($template, $args = []){
        $locale = 'vi';
        static $twig = null;
        if ($twig === null) {
            $loader = new \Twig_Loader_Filesystem(dirname(__DIR__) . '/App/Views');
            //$twig = new \Twig_Environment($loader, array('cache' => dirname(__DIR__) .'/tmp/Cache', 'auto_reload' => true));
            $twig = new \Twig_Environment($loader, array('cache' => false));
        }
        $translator = new \Symfony\Component\Translation\Translator($locale, new \Symfony\Component\Translation\MessageSelector());
        $translator->setFallbackLocales(['en']);
        $translator->addLoader('yaml', new \Symfony\Component\Translation\Loader\YamlFileLoader());
        $translator->addResource('yaml', dirname(__DIR__) . '/Locale/en.yml', 'en');
        $translator->addResource('yaml',  dirname(__DIR__) .'/Locale/vi.yml', 'vi');
        $twig->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($translator));

        echo $twig->render($template, $args);
    }
}
