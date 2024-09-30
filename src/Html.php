<?php

namespace RapTToR;

class HTML
{
    /**
     * Generates the help HTML for the array structure.
     *
     * @return string The HTML string representing the help structure.
     */
    public static function boostrapTheme($id)
    {
        $themes = [
            'metro' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/m8tro-bootstrap/3.3.7/m8tro.min.css" integrity="sha512-rpm4uGjeBNLEI/uNwfMMLgxU9+EFN2SB9PRc7bKGMdGr/GZzDn3bndxrf+wphaOTMwP51RhtXgpaEWFngij1PQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />',
            'material' => '
                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/4.0.2/bootstrap-material-design.umd.min.js" integrity="sha512-dG5ZzvFUfkBdjYdJbsKdGGh8tOa9fv9wHmiChCFJYHRIW1XgfxN2cGzt2HaEPeunXqbAQXBOJvSBQpGOl0qikw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/4.0.2/bootstrap-material-design.min.css" integrity="sha512-1diPgCATeJwHrxYhKZWrv1rINfMVAdmxpYxPK44MCfzqRJk/rhxh4GS9xgaLLuvr9Q9KHJ+EiajOLs7zuBEqzA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            ',
            'flat' => '
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css" integrity="sha512-6f7HT84a/AplPkpSRSKWqbseRTG4aRrhadjZezYQ0oVk/B+nm/US5KzQkyyOyh0Mn9cyDdChRdS9qaxJRHayww==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                <script src="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/js/flat-ui.min.js" integrity="sha512-GG/1z6B4MVJdQOw35lE4otrbjd2WYV+zhXgjUR+DTeaAc7s/ijgWsexEScSOIo8J4RlhC28CVerDjYQSH89ekQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            ',
            'materialstyle' => '
                <script src="https://cdnjs.cloudflare.com/ajax/libs/materialstyle/3.1.1/js/materialstyle.min.js" integrity="sha512-HomE5g4GCoec5rmOoQYXxM8Y6B/GjEilYsqtmvf0kw5IpEkx3jCG4XMdlD+kHIoNLsX6p0sTnoLRrzCFGapuLQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/materialstyle/3.1.1/js/materialstyle.bundle.min.js" integrity="sha512-vri1c05UlaESjVU5bXPXrBE763NjnLlvE5w4qSTveodTOdIuKocgFINsg1n/FyRYMZME7RHCQnx1eFBSJ1I/ng==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            ',
            'sb2' => '
                <script src="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.4/js/sb-admin-2.min.js" integrity="sha512-+QnjQxxaOpoJ+AAeNgvVatHiUWEDbvHja9l46BHhmzvP0blLTXC4LsvwDVeNhGgqqGQYBQLFhdKFyjzPX6HGmw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.4/css/sb-admin-2.min.css" integrity="sha512-Mk4n0eeNdGiUHlWvZRybiowkcu+Fo2t4XwsJyyDghASMeFGH6yUXcdDI3CKq12an5J8fq4EFzRVRdbjerO3RmQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            ',
            // bootswatch
            'cerulean' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/cerulean/bootstrap.min.css" integrity="sha512-vaImhtQoaCXvevCM/UK+8ND/df0kiQWLtR65wgq0AWShEXLpWHMve0oGgU0q1gq1MbbyEuAhMMlqNmZd7s7wTQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />',
            'cosmo' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/cosmo/bootstrap.min.css" integrity="sha512-PU+mnI7iaSDt/G/adHVcQOX2I+K3bQ27kwHJQ1rPq5iqQvHuHSdJOUU/TmPcUsyUGrfAxK+Z4rnx/SL+qCmBNQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />',
            'cyborg' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/cyborg/bootstrap.min.css" integrity="sha512-M+Wrv9LTvQe81gFD2ZE3xxPTN5V2n1iLCXsldIxXvfs6tP+6VihBCwCMBkkjkQUZVmEHBsowb9Vqsq1et1teEg==" crossorigin="anonymous" referrerpolicy="no-referrer" />',
            'darkly' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/darkly/bootstrap.min.css" integrity="sha512-HDszXqSUU0om4Yj5dZOUNmtwXGWDa5ppESlX98yzbBS+z+3HQ8a/7kcdI1dv+jKq+1V5b01eYurE7+yFjw6Rdg==" crossorigin="anonymous" referrerpolicy="no-referrer" />',
            'flatly' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/flatly/bootstrap.min.css" integrity="sha512-qoT4KwnRpAQ9uczPsw7GunsNmhRnYwSlE2KRCUPRQHSkDuLulCtDXuC2P/P6oqr3M5hoGagUG9pgHDPkD2zCDA==" crossorigin="anonymous" referrerpolicy="no-referrer" />',
            'journal' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/journal/bootstrap.min.css" integrity="sha512-i0XjXal2VCWv2R9nyqgvp/pPZGTG563h0djHqDDgu/8S9EIsLNpv+9WoqQFu3ngwDyD5I5WvwauQM1gyNXxsRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />',
            'litera' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/litera/bootstrap.min.css" integrity="sha512-TUtnNUXMMWp2IALAR9t2z1vuorOUQL4dPWG3J9ANInEj6xu/rz5fzni/faoEGzuqeY1Z1yGD6COYAW72oiDVYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />',
            'lumen' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/lumen/bootstrap.min.css" integrity="sha512-N6Wwrw2+w72hDf55YI/j+y3JUXpO7qTuo+kilvcpFJqEabBFA3nurVZineUcg4+op0dJLrzQXcNNif9Gf/ECPA==" crossorigin="anonymous" referrerpolicy="no-referrer" />',
            'lux' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/lux/bootstrap.min.css" integrity="sha512-RI2S7J+KOTIVVh6JxrBRNIxJjIioHORVNow+SSz2OMKsDLG5y/YT6iXEK+R0LlKBo/Uwr1O063yT198V6AZh4w==" crossorigin="anonymous" referrerpolicy="no-referrer" />',
            'materia' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/materia/bootstrap.min.css" integrity="sha512-2S9Do+uTmZmmJpdmAcOKdUrK/YslcvAuRfIF2ws8+BW9AvZXMRZM+o8Wq+PZrfISD6ZlIaeCWWZAdeprXIoYuQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />',
            'minty' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/minty/bootstrap.min.css" integrity="sha512-+/uDiVv4ZLhHnXToJFPwYK08kkG2et1rSuiitOl+0hdzmx2N6HQaMqm/7ORzr8dhco+cyGZCRxkXU7EMMYOLfQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />',
            'morph' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/morph/bootstrap.min.css" integrity="sha512-Nd3lZDftpGFIyfIz/Snlz7SzhEycjmHkNn3s2dmhrVyY55uJnTE+UiK75+CeXltD5GmU7c9n/JMDWaEwGQjowQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />',
            'pulse' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/pulse/bootstrap.min.css" integrity="sha512-obkkQCe89/FCOU2KW0b5uQy371PYlf2myYmsVb9EaDeI2t+ZtSec+uSA8HdHFiiNfcLWA8p+nRM3WSHrQKpwuA==" crossorigin="anonymous" referrerpolicy="no-referrer" />',
            'quartz' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/quartz/bootstrap.min.css" integrity="sha512-K+FEHZnRHFnQ6iahLNQUCHNpKDHkrYxHZmzFjOJteRPjBhjLmOgJgGJsIYBDOS1wYxcSVvAcfg3ZFpm6tnbhOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />',
            'sandstone' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/sandstone/bootstrap.min.css" integrity="sha512-0/qBfS6zg4ZK/qvnGwbCpVGDFnfcVnTWhmHgiQNDCcgRLrCBfG4LWAYir/jw/jANoGjEsvQ9ajc9V0j7hxFxag==" crossorigin="anonymous" referrerpolicy="no-referrer" />',
            'simplex' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/simplex/bootstrap.min.css" integrity="sha512-I5ESCAJpdBMo33TBRme9r2K8h7exjtz0lvvBt0BGmjHJxlq+5YNkP2JQZmZrCilMpnM+bJF4Y/53KRmFEMqbpQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />',
            'sketchy' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/sketchy/bootstrap.min.css" integrity="sha512-y4F259NzBXkxhixXEuh574bj6TdXVeS6RX+2x9wezULTmAOSgWCm25a+6d0IQxAnbg+D4xIEJoll8piTADM5Gg==" crossorigin="anonymous" referrerpolicy="no-referrer" />',
            'slate' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/slate/bootstrap.min.css" integrity="sha512-3EVe7TjxthzbTGfmRFr7zIvHjDWW7viFDgKOoTJ7S5IIrrKVN5rbPVjj0F7nT6rTyAkURnzwoujxlALvHoO9jw==" crossorigin="anonymous" referrerpolicy="no-referrer" />',
            'solar' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/solar/bootstrap.min.css" integrity="sha512-0BjJSwKzc+sx3vM/B9nEU98M/hCLM2bcIWrzGe9fqJZFVicDjxu2vrHd0/7ildD+23p5JsQNo8IEL+sOb+A1iw==" crossorigin="anonymous" referrerpolicy="no-referrer" />',
            'spacelab' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/spacelab/bootstrap.min.css" integrity="sha512-NWw8XgTx2tYA5oEZwBrmyH8bg37mh4bIjeV4OLWwqI3ipQ0ITyiWTFdG295uz2lMy+QO9DszNZwta4m4mJpnmw==" crossorigin="anonymous" referrerpolicy="no-referrer" />',
            'superhero' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/superhero/bootstrap.min.css" integrity="sha512-yeFVFyLRIY48erNjFZ1uXiERPXN8izq4mBNe4iSgVYT0bq/ZiSsWwTlaSObBDeqR/+7MBw1g23iSpI9ru/qtGQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />',
            'united' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/united/bootstrap.min.css" integrity="sha512-bDf5pNGht0HBv1tNSyB06LQ4D+5IV4xpCmAFKORMIQi57c8mq96hg2Wa03//JNjHEjEai1qV+ZOUcwuy70j02A==" crossorigin="anonymous" referrerpolicy="no-referrer" />',
            'vapor' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/vapor/bootstrap.min.css" integrity="sha512-9LoG2EQdcmuEQpzkslqa3whcL8LM+7GGPsW2MK1gRlmiML0G7M5ZPj2aZaW2DyixslBfZoy4kANfP/MYWDCSiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />',
            'yeti' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/yeti/bootstrap.min.css" integrity="sha512-Iwexq+Vk4qT5CCO6UdOTzOxJUB0eQxAWAfm6ytWws6MMcD6illgOw7QFjWoqqd3bQJS/EZPUR9nOACG7i5WMPQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />',
            'zephyr' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.3/zephyr/bootstrap.min.css" integrity="sha512-CWXb9sx63+REyEBV/cte+dE1hSsYpJifb57KkqAXjsN3gZQt6phZt7e5RhgZrUbaNfCdtdpcqDZtuTEB+D3q2Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />',
        ];
        if (isset($themes[$id]))
            return $themes[$id];

        return '';
    }


    /**
     * Generates the HTML start tag for a webpage.
     *
     * @param array $column An array containing the HTML general settings.
     * @return string The generated HTML start tag.
     */
    public static function generateStart($options, $defaults = [
        "column" => array(),
    ])
    {
        $parent = get_called_class();
        extract(array_merge($defaults, $options));

        $general = (isset($column["general"])) ? $column["general"] : array();
        extract($general);
        $html = '';

        $html .= '<!DOCTYPE html>' . PHP_EOL;
        $html .= '<html lang="en">' . PHP_EOL;
        $html .= '<head>' . PHP_EOL;

        $html .= '<meta charset="UTF-8">' . PHP_EOL;
        $html .= '<meta http-equiv="X-UA-Compatible" content="IE=edge">' . PHP_EOL;
        if (isset($title)) $html .= '<title>' . $title . '</title>' . PHP_EOL;
        if (isset($description)) $html .= '<meta name="description" content="' . $description . '">' . PHP_EOL;
        if (isset($favicon)) {
            $html .= '<link rel="icon" href="' . $favicon . '" type="image/x-icon">' . PHP_EOL;
            $html .= '<link rel="shortcut icon" href="' . $favicon . '" type="image/x-icon">' . PHP_EOL;
        }
        if (isset($image)) $html .= '<meta name="image" content="' . $image . '">' . PHP_EOL;
        if (isset($author)) $html .= '<meta name="author" content="' . $author . '">' . PHP_EOL;
        if (isset($root)) $html .= '<base href="' . $root . '">' . PHP_EOL;
        $html .= '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">' . PHP_EOL;

        $html .= '<!-- jquery-->' . PHP_EOL;
        $html .= '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>' . PHP_EOL;
        $html .= '<!-- bootstap-->' . PHP_EOL;
        $html .= '<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>' . PHP_EOL;
        $html .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />' . PHP_EOL;
        $html .= '<!-- user scripts-->' . PHP_EOL;
        if (isset($column["general"]["scripts"]))
            foreach ($column["general"]["scripts"] as $script) {
                $extension = pathinfo($script, PATHINFO_EXTENSION);
                if (substr($script, 0, 1) == "<") {
                    $html .= $script;
                } else if ($extension == "js") {
                    $html .= '<script src="' . $script . '"></script>';
                } else if ($extension == "css") {
                    $html .= '<link rel="stylesheet" href="' . $script . '">';
                }
                $html .= "\n";
            }

        if (isset($general["theme"]))
            $html .= $parent::boostrapTheme($general["theme"]);

        $html .= '</head>' . PHP_EOL;
        $html .= '<body>' . PHP_EOL;
        return $html;
    }

    /**
     * Generates the HTML for a help page.
     *
     * The help page describes the structure of the input array.
     *
     * @return string The HTML for the help page.
     */
    public static function generateHelp()
    {
        $html = '';
        $html .= '<h1>HELP</h1>';
        $html .= '<p>Array structure</p>';
        $html .= '<ul>';
        $html .= '  <li>general (all fields are optional)</li>';
        $html .= '  <ul>';
        $html .= '      <li>title</li>';
        $html .= '      <li>image</li>';
        $html .= '      <li>root</li>';
        $html .= '  </ul>';
        $html .= '  <li>item (all fields are optional)</li>';
        $html .= '  <ul>';
        $html .= '      <li>type (image/card/listing/content/btn(button)/link)</li>';
        $html .= '      <li>menu [title]</li>';
        $html .= '      <li>align,aligntext (string - aligntext defaults to align)</li>';
        $html .= '      <li>class (string)</li>';
        $html .= '      <li>size (int 1-12 - default 12, columns md)</li>';
        $html .= '      <li>title (string)</li>';
        $html .= '      <li>content (string)</li>';
        $html .= '      <li>link (string)</li>';
        $html .= '      <li>label (string, link text)</li>';
        $html .= '      <li>items [item,...]</li>';
        $html .= '  </ul>';
        $html .= '</ul>';
        return $html;
    }

    /**
     * Generates a slug from a given string.
     *
     * @param string $str The input string to be converted into a slug.
     * @return string The slugified string.
     */
    public static function generateSlug($str)
    {
        $str = strtolower($str);
        $str = preg_replace('/[^a-z0-9 -]/', '', $str);
        $str = str_replace(' ', '-', $str);
        return preg_replace('/-+/', '-', $str);
    }


    /**
     * Generates the HTML for a menu based on the provided column data.
     *
     * @param array $column An array containing the menu data.
     * @return string The HTML for the menu.
     */
    public static function generateMenu($options, $defaults = [
        "column" => []
    ])
    {
        $parent = get_called_class();
        extract(array_merge($defaults, $options));

        $html = '';
        if (is_array($column)) {
            $title = isset($column["general"]["title"]) ? $column["general"]["title"] : 'APP';
            $icon = isset($column["general"]["image"]) ? $column["general"]["image"] : 'logo.png';
            $root = isset($column["general"]["root"]) ? $column["general"]["root"] : '/';
            if (is_string($root) && substr($root, -1) != '/') $root = $root . '/';

            $html .= '<nav class="navbar navbar-expand-lg navbar-light bg-light">';
            $html .= '<div class="container">';
            $html .= '<a class="navbar-brand" href="' . $root . '">';
            $html .= '<img src="' . $icon . '" class="img-logo" alt="Logo">' . $title . '</a>';
            $html .= '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">';
            $html .= '<span class="navbar-toggler-icon"></span>';
            $html .= '</button>';

            foreach ($column as $item) {
                if (is_array($item) && isset($item["menu"])) {
                    $menu = $item["menu"];
                    if (is_array($menu) && isset($menu["title"])) {
                        $title = $menu["title"];
                        $slug = $parent::generateSlug($title);
                        $html .= '<div class="collapse navbar-collapse" id="navbarNav">';
                        $html .= '<ul class="navbar-nav">';
                        $html .= '<li class="nav-item">';
                        $html .= '<a class="nav-link" href="' . $root . '#' . $slug . '">' . $title . '</a>';
                        $html .= '</li>';
                        $html .= '</ul>';
                        $html .= '</div>';
                    }
                }
            }
            $html .= '</div>';
            $html .= '</nav>';
        }
        return $html;
    }

    /**
     * Wraps the provided content in an HTML tag with optional attributes.
     *
     * @param array $options An array of options to override the default values.
     * @param array $defaults An array of default values for the options.
     * @return string The wrapped HTML content.
     */
    public static function wrapTag($options, $defaults = array(
        "content" => "",
        "tag" => "p",
        "class" => [],
        "id" => false,
        "name" => false,
        "alt" => false,
        "href" => false,
        "onclick" => false,
        "src" => false,
        "align" => false,
        "depth" => false,
        "endtag" => true
    ))
    {
        $parent = get_called_class();
        extract(array_merge($defaults, $options));
        // asume content is passed, but if not, use title or label
        $content = isset($title) ? $title : $content;
        $content = isset($label) ? $label : $content;

        $class = (is_array($class) ? implode(" ", $class) : $class);
        if ($align) $class .= ' text-' . $align;
        if ($depth) $class .= ' depth-' . $depth;

        $html = '<' . $tag . ' class="' . $class . '" ' .
            ($id ? ' id="' . $id . '" ' : '') . ' ' .
            ($src ? ' src="' . $src . '" ' : '') .
            ($alt ? ' alt="' . $alt . '" ' : '') .
            ($onclick ? ' onclick="' . $onclick . '" ' : '') .
            ($name ? ' name="' . $name . '" ' : '') .
            ($href ? ' href="' . $href . '" ' : '') .
            '>' . $content;
        $endtag = $endtag || !(in_array($tag, ['input', 'img']));
        if ($endtag) $html .= '</' . $tag . '>';
        $html .= PHP_EOL;
        return $html;
    }

    /**
     * Generates an HTML div element with classes 'clear', 'clearfix', and 'block'.
     *
     * @return string The HTML div element as a string.
     */
    public static function clear()
    {
        $parent = get_called_class();
        $html = '<div class="clear clearfix block"></div>';
        return $html;
    }

    /**
     * Generates HTML content based on the provided column data and depth.
     * 
     * This function is used to recursively generate HTML content for a given column data structure.
     * It handles different types of columns, such as hero, image, card, button, link, and listing.
     * 
     * @param array $column The column data structure to generate HTML for.
     * @param int $depth The current depth level of the recursive generation.
     * 
     * @return string The generated HTML content.
     */
    public static function generateHTML($options, $defaults = [
        "column" => array(),
        "depth" => 1
    ])
    {
        $parent = get_called_class();
        extract(array_merge($defaults, $options));
        $html = '';
        if ($depth == 1) {
            if (
                isset($column["general"]) &&
                (!isset($column["general"]["head"]) ||  $column["general"]["head"])
            )
                $html .= $parent::generateStart(["column" => $column]);

            if (
                isset($column["general"]) &&
                (!isset($column["general"]["menu"]) || $column["general"]["menu"])
            )
                $html .= $parent::generateMenu(["column" => $column]);
            $html .= '<div class="container">';
        }
        if (isset($column["general"])) {
            unset($column["general"]);
        }
        if (is_array($column)) {
            $type = isset($column['type']) ? $column['type'] : 'content';
            $class = isset($column['class']) ? $column['class'] : '';
            $align = isset($column['align']) ? $column['align'] : 'left';
            $aligntext = isset($column['aligntext']) ? $column['aligntext'] : $align;
            $link = isset($column['link']) ? $column['link'] : false;

            $title = isset($column['title']) ? $column['title'] : false;
            $h = isset($column['h']) ? $column['h'] : $depth;

            $content = isset($column['content']) ? $column['content'] : false;
            $content = isset($column['description']) ? $column['description'] : $content;

            $items = isset($column['items']) ? $column['items'] : false;
            $menu = isset($column['menu']) ? $column['menu'] : false;

            if ($menu && isset($menu["title"])) {
                $slug = $parent::generateSlug($menu["title"]);
                $html .= '<a name="' . $slug . '"></a>';
            }

            if (isset($column["type"])) {
                //var_dump($title, $content, $items);

                if (!in_array($type, explode(',', 'card,hero,footer,html'))) {
                    if ($link && $type != 'image') // almost everything can have an image attached, except image itself.
                        $html .= $parent::wrapTag(['src' => $link, 'tag' => 'img']);
                    if ($title) // almost everything can have a title
                        $html .= $parent::wrapTag(['content' => $title, 'tag' => 'h' . $h, 'class' => 'text-' . $align]);
                    if ($content) // almost everything can have content
                        $html .= $parent::wrapTag(['content' => $content, 'tag' => 'p', 'class' => 'text-' . $aligntext]);
                }

                if ($type == 'hero') {
                    $html .= '</div></div>' . PHP_EOL;
                }
                if ($type == 'footer') {
                    $html .= '</div></div>
                    <footer class="footer ' . $class . '">
                    <div class="container-fluid">
                    ';
                }

                switch ($type) {
                    case 'html':
                        $html .= $column['content'];
                        break;
                    case 'hero':
                        $html .= '<div class="hero bkg-image' . $class . '" style="clear:both;height:80vh;background-image: url(' . $link . ')">';
                        $html .= '  <div class="container">';
                        $html .= '    <div class="row">';
                        $html .= '        <div class="col-12">';
                        $html .= $parent::wrapTag(['content' => $title, 'tag' => 'h' . $h]);
                        $html .= '          <div class="row"><div class="col-md-6">';
                        $html .= $parent::wrapTag(['content' => $content, 'tag' => 'p']);
                        $html .= '          </div></div> <!-- col-md-6/row -->';
                        $html .= '        </div> <!-- col-12 -->';
                        $html .= '    </div> <!-- row -->';
                        $html .= '  </div> <!-- container -->';
                        $html .= '</div> <!-- hero -->';
                        $html .= $parent::clear();
                        break;
                    case 'image':
                        $html .= $parent::wrapTag($column + ['src' => $link, 'tag' => 'img', 'alt' => htmlspecialchars($title), 'class' => $class . ' w-100 img-fluid img-responsive ' . ($type !== 'hero' ? 'content-image' : 'hero')]);
                        // $html .= '<img src="' . htmlspecialchars($link) . '" class="' . ($type !== 'hero' ? 'content-image' : 'hero') . ' w-100 img-fluid img-responsive col-12 ' . $class . '" alt="' . htmlspecialchars($title) . '">';
                        break;
                    case 'card':
                        $html .= '<div class="card ' . $class . '">';
                        $html .= ' <div class="card-body">' . PHP_EOL;
                        if ($link)
                            $html .=  '<div class="card-image">' .
                                $parent::wrapTag(['src' => $link, 'tag' => 'img', 'class' => ' w-50 text-center  img-responsive img-card'])
                                . '</div>';
                        if ($title) {
                            $html .= $parent::wrapTag(['content' => $title, 'tag' => 'h' . $h, 'class' => 'card-title']);
                            // $html .= '  <h' . $h . ' class="card-title">' . htmlspecialchars($title) . '</h' . $h . '>' . PHP_EOL;
                        }
                        if ($content) {
                            $html .= $parent::wrapTag(['content' => $content, 'tag' => 'p', 'class' => 'card-text']);

                            // $html .= '  <p class="card-text">' . htmlspecialchars($content) . '</p>' . PHP_EOL;
                        }
                        $html .= ' </div>' . PHP_EOL;
                        $html .= '</div>' . PHP_EOL;
                        break;
                    case 'button':
                    case 'btn':
                        $label = isset($column['label']) ? $column['label'] : false;
                        $html .= $parent::wrapTag(['content' => $label, 'tag' => 'a', 'class' => 'btn ' . $class] + $column);
                        // $html .= '<a href="' . htmlspecialchars($link) . '" class="btn btn-primary ' . $class . '">' . htmlspecialchars($label) . '</a>' . PHP_EOL;
                        break;
                    case 'link':
                        $label = isset($column['label']) ? $column['label'] : false;
                        $html .= $parent::wrapTag(['content' => $label, 'tag' => 'a', 'class' => $class] + $column);
                        //$html .= '<a href="' . htmlspecialchars($link) . '" class="' . $class . '">' . htmlspecialchars($label) . '</a>' . PHP_EOL;
                        break;
                    case 'listing':
                        $html .= '<ul class="' . $class . '">' . PHP_EOL;
                        foreach ($items as $subItem) {
                            $html .= $parent::wrapTag(['content' => $parent::generateHTML(["column" => $subItem, "depth" => $depth + 1]), 'tag' => 'li']) . PHP_EOL;
                            // $html .= '<li class="">' .  . '</li>' . PHP_EOL;
                        }
                        $html .= '</ul>' . PHP_EOL;
                        $items = false;
                        break;
                    default:
                        break;
                }
                if ($items) {
                    $html .= $parent::generateHTML(['column' => $items, "depth" => $depth + 1]);
                }

                if ($type == 'hero') {
                    $html .= '<div class="container">';
                }
                if ($type == 'footer') {
                    $html .= '</div>
                    </footer>' . PHP_EOL;
                }
            } else { // list of items
                $havesize = false;
                $rest = 12;
                $size = round(12 / (count($column) > 0 ? count($column) : 1));
                if ($size == 0) $size = 1;

                $sizeclass = 'col-' . $size;
                if (!isset($column["size"])) {
                    $countofitems = count($column);
                    if ($countofitems == 2) // 2
                        $sizeclass = 'col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6';
                    if ($countofitems == 3)
                        $sizeclass = 'col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4';
                    if ($countofitems == 4)
                        $sizeclass = 'col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3';
                    if ($countofitems > 4)
                        $sizeclass = 'col-12 col-sm-4 col-md-3 col-lg-2 col-xl-2';
                    if ($countofitems > 9)
                        $sizeclass = 'col-12 col-sm-4 col-md-3 col-lg-2 col-xl-2';
                    if ($countofitems > 11) $sizeclass = 'col-12 col-sm-3 col-md-2 col-lg-1 col-xl-1';
                }

                $html .= '<div class="row  ' . $class . ' align-' . $align . ' depth-' . $depth . '">' . PHP_EOL;
                foreach ($column as $c) {
                    if (is_array($c) && isset($c["size"])) {
                        $havesize = true;
                        $size = $c["size"];
                        $rest -= $size;
                    } else if ($havesize)
                        $size = $rest;
                    if ($depth == 1) $size = 12; // for depth 1, all columns have the same size, full rows.

                    $addwrapper = true;
                    if (is_array($c) && isset($c["type"]) && $c["type"] == "hero") $addwrapper = false;

                    if ($addwrapper) $html .= ' <' . ($depth < 2 ? "section" : "div") . ' class="' . ($depth > 1 ? $sizeclass : '') . ' align-' . $align . ' ' . $class . '">' . PHP_EOL;
                    $html .=  $parent::generateHTML(['column' => $c, "depth" => $depth + 1]);
                    if ($addwrapper) $html .= ' </' . ($depth < 2 ? "section" : "div") . '>' . PHP_EOL;
                }
                $html .= '</div>' . PHP_EOL;
                $html .= $parent::clear() . PHP_EOL;
            }
        } else if (is_string($column)) {
            $html .= $column;
        }

        if ($depth == 1)
            $html .= '</div>' . PHP_EOL;
        return $html;
    }
}
