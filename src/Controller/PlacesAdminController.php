<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 16:07
 * PHP version 7
 */

namespace App\Controller;

use App\Model\HistoryManager;
use App\Model\PlaceManager;
use App\Model\PresentationManager;
use App\Model\WhatIsItManager;

/**
 * Class PlaceController
 *
 */
class PlacesAdminController extends AbstractController
{

    /**
     * Display place listing
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        $placeManager = new PlaceManager();
        $places = $placeManager->selectAll();

        return $this->twig->render(
            'PlacesAdmin/index.html.twig',
            ['places' => $places]
        );
    }
}
