<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;


class ApiController extends Controller {

    public function indexAction(Request $request) {

        echo "<h1>Api 3PL</h1>";
        die();
    }

    public function getAction(Request $request) {

        $Post = json_decode(($request->get("Data")));


        if (isset($Post->Metodo)) {

            switch ($Post->Metodo) {
                case "testConnection":
                    self::testConnection($request);
                    break;
                default:
                    echo json_encode(array("Resultado" => "Método Incorrecto"));
            }
        } else {
            echo json_encode(array("Resultado" => "Debe indicar un método"));
        }

        die();
    }

    public function postAction(Request $request) {

        $Post = json_decode(($request->get("Data")));
        if (isset($Post->Metodo)) {

            switch ($Post->Metodo) {
                case "testConnection":
                    self::testConnection($request);
                    break;
                default:
                    echo json_encode(array("Resultado" => "Método Incorrecto"));
            }
        } else {
            echo json_encode(array("Resultado" => "Debe indicar un método"));
        }

        die();
    }
	
	public function getMonedasAction(Request $request) {

			$em = $this->getDoctrine()->getEntityManager();
            $db = $em->getConnection();

            $query = "SELECT * FROM MONEDAS";
            $stmt = $db->prepare($query);
            $stmt->execute();
            $Array_Result = $stmt->fetchAll();
            
            $encoders = array(new XmlEncoder(), new JsonEncoder());
            $normalizers = array(new ObjectNormalizer());
            $serializer = new Serializer($normalizers, $encoders);

            $jsonContent = $serializer->serialize($Array_Result, 'json');
            echo $jsonContent;
			       

        die();
    }

}
