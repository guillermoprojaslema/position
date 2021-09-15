<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class CounterController
 * @package App\Http\Controllers
 */
class CounterController extends Controller
{


    /**
     * Array with css file extension
     *
     * @var array
     */
    private $css_file_extensions = ['css'];
    /**
     * Array with file image extension
     * @url https://developer.mozilla.org/en-US/docs/Web/Media/Formats/Image_types
     * @var array
     */
    private $image_file_extensions = [
        'apng',
        'avif',
        'gif',
        'jpg',
        'jpeg',
        'jfif',
        'pjpeg',
        'pjp',
        'png',
        'svg',
        'webp',
        'bmp',
        'ico',
        'cur',
        'tif',
        'tiff',
    ];


    /*TODO: Iniciar Vue.js*/ // TODO: CHECK
    /*TODO: Crear una llamada en ajax con Vue.js*/
    /*TODO: Mostrar los datos en la pantalla*/
    /*TODO: Instalar bootstrap vía npm o composer*/
    /*TODO: Subir a github*/
    /*TODO: Redactar instrucciones de despliegue*/


    /**
     * Get the Raw HTML code from an URL and returns css files and images quantity
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajx_counter(Request $request)
    {
        $html = file_get_contents($request->input('website'));


        if ($request->has('website') && $request->ajax()) {
            $html = file_get_contents($request->input('website'));

            dd([
                'css' => $this->countCssExtensions($html),
                'images' => $this->countImagesExtensions($html),
            ]);

            return response()->json([
                'css' => $this->countCssExtensions($html),
                'images' => $this->countImagesExtensions($html),
            ]);
        }


    }

    /**
     * Returns numbers of time a css file is present
     *
     * @param $html
     * @return int
     */
    private function countCssExtensions($html)
    {
        return $this->countUrls($html, $this->css_file_extensions);
    }

    /**
     * Counts all ocurrences of a extension file from an URL
     *
     * @param $html
     * @param $extensions
     * @return int
     */
    private function countUrls($html, $extensions)
    {
        $pattern = '/https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&\/\/=]*)/';

        preg_match_all($pattern, $html, $matches);

        $count = 0;


        if (!empty($matches) && !empty($matches[0])) {
            foreach ($matches[0] as $key => $url) {
                $filename = basename($url);
                $extension = substr($filename, strrpos($filename, '.') + 1);
                if (in_array($extension, $extensions)) {
                    $count++;
                }
            }
        }

        return $count;
    }

    /**
     * Returns numbers of time a image file is present
     *
     * @param $html
     * @return int
     */
    private function countImagesExtensions($html)
    {
        return $this->countUrls($html, $this->image_file_extensions);
    }

}
