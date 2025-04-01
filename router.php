<?php


switch ($_SERVER["REQUEST_URI"]) {
    case "/":
        echo "Home";
        break;
    case "/about":
        echo "About";
        break;
    case "/contact":
        echo "Contact";
        break;
    case "/projects":
        echo "Projects";
        break;
    case "/skills":
        echo "Skills";
        break;
    default:
        echo "Page 404, introuvable";
        break;
}
