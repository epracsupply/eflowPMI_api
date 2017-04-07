<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use AppBundle\Entity\PmiDashboard;
use AppBundle\Entity\PmiDashboardIndicador;
use AppBundle\Entity\PmiIndicador;
use AppBundle\Entity\PmiIndicadorValor;

class ApiController extends Controller {

    public function indexAction(Request $request) {

        echo "<h1>Api PMI</h1>";
        die();
    }

    public function getAction(Request $request) {

        $Post = json_decode(($request->get("Data")));


        if (isset($Post->Metodo)) {

            switch ($Post->Metodo) {
                case "getDashboard":
                    self::getDashboard($request);
                    break;
                case "getDashboardIndicador":
                    self::getDashboardIndicador($request);
                    break;
                case "getIndicador":
                    self::getIndicador($request);
                    break;
                case "getIndicadorValor":
                    self::getIndicadorValor($request);
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
    
    
    public function postDashboard(Request $request) {

        $Post = json_decode(($request->get("Data")));

        if ($Post->Datos->id === 0) {
            self::insertDashboard($request);
        } else {
            self::updateDashboard($request);
        }

        die();
    }
    public function postDashboardIndicador(Request $request) {

        $Post = json_decode(($request->get("Data")));

        if ($Post->Datos->id === 0) {
            self::insertDashboardIndicador($request);
        } else {
            self::updateDashboardIndicador($request);
        }

        die();
    }
    public function postIndicador(Request $request) {

        $Post = json_decode(($request->get("Data")));

        if ($Post->Datos->id === 0) {
            self::insertIndicador($request);
        } else {
            self::updateIndicador($request);
        }

        die();
    }
    public function postIndicadorValor(Request $request) {

        $Post = json_decode(($request->get("Data")));

        if ($Post->Datos->id === 0) {
            self::insertIndicadorValor($request);
        } else {
            self::updateIndicadorValor($request);
        }

        die();
    }

    public function getDashboard(Request $request) {

        $em = $this->getDoctrine()->getManager();
        $Dashboard_repo = $em->getRepository("AppBundle:PmiDashboard");
        $Dashboards = $Dashboard_repo->findAll();

        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);

        $jsonContent = $serializer->serialize($Dashboards, 'json');
        echo $jsonContent;

        die();
    }

    public function getDashboardIndicador(Request $request) {

        $em = $this->getDoctrine()->getManager();
        $DashboardIndicador_repo = $em->getRepository("AppBundle:PmiDashboardIndicador");
        $DashboardIndicadores = $DashboardIndicador_repo->findAll();

        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);

        $jsonContent = $serializer->serialize($DashboardIndicadores, 'json');
        echo $jsonContent;

        die();
    }

    public function getIndicador(Request $request) {

        $em = $this->getDoctrine()->getManager();
        $Indicador_repo = $em->getRepository("AppBundle:PmiIndicador");
        $Indicadores = $Indicador_repo->findAll();

        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);

        $jsonContent = $serializer->serialize($Indicadores, 'json');
        echo $jsonContent;

        die();
    }

    public function getIndicadorValor(Request $request) {

        $em = $this->getDoctrine()->getManager();
        $IndicadorValor_repo = $em->getRepository("AppBundle:PmiIndicadorValor");
        $IndicadorValores = $IndicadorValor_repo->findAll();

        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);

        $jsonContent = $serializer->serialize($IndicadorValores, 'json');
        echo $jsonContent;

        die();
    }

    public function insertDashboard(Request $request) {

        $Post = json_decode(($request->get("Data")));

        $em = $this->getDoctrine()->getManager();
        $Dashboard_repo = $em->getRepository("AppBundle:PmiDashboard");
        $Dashboard = $Dashboard_repo->findBy(array("codigoDashboard" => $Post->Datos->codigoDashboard));

        if ($Dashboard != null) {

            echo json_encode(array("Resultado" => "codigoDashboard ya existe en la base de datos"));
        } else {

            $Dashboard = new PmiDashboard();
            $Dashboard->setCodigoDashboard($Post->Datos->codigoDashboard);
            $Dashboard->setTitulo($Post->Datos->titulo);
            $Dashboard->setTemplate($Post->Datos->template);
            $Dashboard->setDescripcion($Post->Datos->descripcion);

            $em->persist($Dashboard);
            $flush = $em->flush();

            if ($flush != null) {
                echo json_encode(array("Resultado" => false));
            } else {
                echo json_encode(array("Resultado" => true));
            }
        }

        die();
    }

    public function insertDashboardIndicador(Request $request) {

        $Post = json_decode(($request->get("Data")));

        $em = $this->getDoctrine()->getManager();
        $DashboardIndicador_repo = $em->getRepository("AppBundle:PmiDashboardIndicador");
        $DashboardIndicador = $DashboardIndicador_repo->findBy(array("codigoIndicador" => $Post->Datos->codigoIndicador));

        if ($DashboardIndicador != null) {

            echo json_encode(array("Resultado" => "codigoIndicador ya existe en la base de datos"));
        } else {

            $DashboardIndicador = new PmiDashboardIndicador();
            $DashboardIndicador->setCodigoDashboard($Post->Datos->codigoDashboard);
            $DashboardIndicador->setCodigoIndicador($Post->Datos->codigoIndicador);
            $DashboardIndicador->setTipogGrafico($Post->Datos->tipoGrafico);
            $DashboardIndicador->setCantidad($Post->Datos->cantidad);
            $DashboardIndicador->setPeriodos($Post->Datos->periodos);
            $DashboardIndicador->setTextox($Post->Datos->textox);
            $DashboardIndicador->setTextoy($Post->Datos->textoy);
            $DashboardIndicador->setPosicion($Post->Datos->posicion);

            $em->persist($DashboardIndicador);
            $flush = $em->flush();

            if ($flush != null) {
                echo json_encode(array("Resultado" => false));
            } else {
                echo json_encode(array("Resultado" => true));
            }
        }

        die();
    }

    public function insertIndicador(Request $request) {

        $Post = json_decode(($request->get("Data")));

        $em = $this->getDoctrine()->getManager();
        $Indicador_repo = $em->getRepository("AppBundle:PmiIndicador");
        $Indicador = $Indicador_repo->findBy(array("codigoSucursal" => $Post->Datos->codigoIndicador));

        if ($Indicador != null) {

            echo json_encode(array("Resultado" => "codigoIndicador ya existe en la base de datos"));
        } else {

            $Indicador = new PmiIndicador();
            $Indicador->setCodigoIndicador($Post->Datos->codigoIndicador);
            $Indicador->setNombre($Post->Datos->nombre);
            $Indicador->setDescripcion($Post->Datos->descripcion);
            $Indicador->setPeriodicidad($Post->Datos->periodicidad);
            $Indicador->setValorMeta($Post->Datos->valorMeta);
            $Indicador->setValorCritico($Post->Datos->valorCritico);
            $Indicador->setTendenciaPositiva($Post->Datos->tendenciaPositiva);
            $Indicador->setPorcentual($Post->Datos->porcentual);

            $em->persist($Indicador);
            $flush = $em->flush();

            if ($flush != null) {
                echo json_encode(array("Resultado" => false));
            } else {
                echo json_encode(array("Resultado" => true));
            }
        }

        die();
    }

    public function insertSucursal(Request $request) {

        $Post = json_decode(($request->get("Data")));

        $em = $this->getDoctrine()->getManager();
        $IndicadorValor_repo = $em->getRepository("AppBundle:PmiIndicadorValor");
        $IndicadorValor = $IndicadorValor_repo->findBy(array("codigoSucursal" => $Post->Datos->codigoIndicador));

        if ($IndicadorValor != null) {

            echo json_encode(array("Resultado" => "codigoIndicador ya existe en la base de datos"));
        } else {

            $IndicadorValor = new PmiIndicadorValor();
            $IndicadorValor->setCodigoIndicador($Post->Datos->codigoIndicador);
            $IndicadorValor->setPeriodo($Post->Datos->periodo);
            $IndicadorValor->setValor($Post->Datos->valor);

            $em->persist($IndicadorValor);
            $flush = $em->flush();

            if ($flush != null) {
                echo json_encode(array("Resultado" => false));
            } else {
                echo json_encode(array("Resultado" => true));
            }
        }

        die();
    }

    public function updateDashboard(Request $request) {

        $Post = json_decode(($request->get("Data")));

        $em = $this->getDoctrine()->getManager();
        $Dashboard_repo = $em->getRepository("AppBundle:PmiDashboard");
        $Dashboard = $Dashboard_repo->findOneBy(array("codigoDashboard" => $Post->Datos->codigoDashboard));

        $Dashboard->setCodigoDashboard($Post->Datos->codigoDashboard);
        $Dashboard->setTitulo($Post->Datos->titulo);
        $Dashboard->setTemplate($Post->Datos->template);
        $Dashboard->setDescripcion($Post->Datos->descripcion);

        $em->persist($Dashboard);
        $flush = $em->flush();

        if ($flush != null) {
            echo json_encode(array("Resultado" => false));
        } else {
            echo json_encode(array("Resultado" => true));
        }

        die();
    }

    public function updateDashboardIndicador(Request $request) {

        $Post = json_decode(($request->get("Data")));

        $em = $this->getDoctrine()->getManager();
        $DashboardIndicador_repo = $em->getRepository("AppBundle:PmiDashboardIndicador");
        $DashboardIndicador = $DashboardIndicador_repo->findOneBy(array("codigoIndicador" => $Post->Datos->codigoIndicador));

        $DashboardIndicador->setCodigoDashboard($Post->Datos->codigoDashboard);
        $DashboardIndicador->setCodigoIndicador($Post->Datos->codigoIndicador);
        $DashboardIndicador->setTipogGrafico($Post->Datos->tipoGrafico);
        $DashboardIndicador->setCantidad($Post->Datos->cantidad);
        $DashboardIndicador->setPeriodos($Post->Datos->periodos);
        $DashboardIndicador->setTextox($Post->Datos->textox);
        $DashboardIndicador->setTextoy($Post->Datos->textoy);
        $DashboardIndicador->setPosicion($Post->Datos->posicion);

        $em->persist($DashboardIndicador);
        $flush = $em->flush();

        if ($flush != null) {
            echo json_encode(array("Resultado" => false));
        } else {
            echo json_encode(array("Resultado" => true));
        }


        die();
    }

    public function updateIndicador(Request $request) {

        $Post = json_decode(($request->get("Data")));

        $em = $this->getDoctrine()->getManager();
        $Indicador_repo = $em->getRepository("AppBundle:PmiIndicador");
        $Indicador = $Indicador_repo->findOneBy(array("codigoSucursal" => $Post->Datos->codigoIndicador));

        $Indicador->setCodigoIndicador($Post->Datos->codigoIndicador);
        $Indicador->setNombre($Post->Datos->nombre);
        $Indicador->setDescripcion($Post->Datos->descripcion);
        $Indicador->setPeriodicidad($Post->Datos->periodicidad);
        $Indicador->setValorMeta($Post->Datos->valorMeta);
        $Indicador->setValorCritico($Post->Datos->valorCritico);
        $Indicador->setTendenciaPositiva($Post->Datos->tendenciaPositiva);
        $Indicador->setPorcentual($Post->Datos->porcentual);

        $em->persist($Indicador);
        $flush = $em->flush();

        if ($flush != null) {
            echo json_encode(array("Resultado" => false));
        } else {
            echo json_encode(array("Resultado" => true));
        }

        die();
    }

    public function updateIndicadorValor(Request $request) {

        $Post = json_decode(($request->get("Data")));

        $em = $this->getDoctrine()->getManager();
        $IndicadorValor_repo = $em->getRepository("AppBundle:PmiIndicadorValor");
        $IndicadorValor = $IndicadorValor_repo->findOneBy(array("codigoSucursal" => $Post->Datos->codigoIndicador));

        $IndicadorValor->setCodigoIndicador($Post->Datos->codigoIndicador);
        $IndicadorValor->setPeriodo($Post->Datos->periodo);
        $IndicadorValor->setValor($Post->Datos->valor);

        $em->persist($IndicadorValor);
        $flush = $em->flush();

        if ($flush != null) {
            echo json_encode(array("Resultado" => false));
        } else {
            echo json_encode(array("Resultado" => true));
        }

        die();
    }
    
     public function deleteDashboard(Request $request) {

        $Post = json_decode(($request->get("Data")));

        $em = $this->getDoctrine()->getEntityManager();
        $Dashboard_repo = $em->getRepository("AppBundle:PmiDashboard");

        $Dashboard = $Dashboard_repo->findOneBy(array("id" => $Post->Datos->id));
        $em->remove($Dashboard);

        $flush = $em->flush();

        if ($flush != null) {
            echo json_encode(array("Resultado" => false));
        } else {
            echo json_encode(array("Resultado" => true));
        }

        die();
    }
    
    public function deleteDashboardIndicador(Request $request) {

        $Post = json_decode(($request->get("Data")));

        $em = $this->getDoctrine()->getEntityManager();
        $DashboardIndicador_repo = $em->getRepository("AppBundle:PmiDashboardIndicador");

        $DashboardIndicador = $DashboardIndicador_repo->findOneBy(array("id" => $Post->Datos->id));
        $em->remove($DashboardIndicador);

        $flush = $em->flush();

        if ($flush != null) {
            echo json_encode(array("Resultado" => false));
        } else {
            echo json_encode(array("Resultado" => true));
        }

        die();
    }
    
    public function deleteIndicador(Request $request) {

        $Post = json_decode(($request->get("Data")));

        $em = $this->getDoctrine()->getEntityManager();
        $Indicador_repo = $em->getRepository("AppBundle:PmiIndicador");

        $Indicador = $Indicador_repo->findOneBy(array("id" => $Post->Datos->id));
        $em->remove($Indicador);

        $flush = $em->flush();

        if ($flush != null) {
            echo json_encode(array("Resultado" => false));
        } else {
            echo json_encode(array("Resultado" => true));
        }

        die();
    }
    
    public function deleteIndicadorValor(Request $request) {

        $Post = json_decode(($request->get("Data")));

        $em = $this->getDoctrine()->getEntityManager();
        $IndicadorValor_repo = $em->getRepository("AppBundle:PmiIndicadorValor");

        $IndicadorValor = $IndicadorValor_repo->findOneBy(array("id" => $Post->Datos->id));
        $em->remove($IndicadorValor);

        $flush = $em->flush();

        if ($flush != null) {
            echo json_encode(array("Resultado" => false));
        } else {
            echo json_encode(array("Resultado" => true));
        }

        die();
    }

}
