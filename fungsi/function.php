<?php
function halaman($page)
{
    try {
        switch ($page) {
            case 'atm':
                $page = './pages/atm/atm.php';
                break;
            case 'detail-atm':
                $page = './pages/atm/detail.php';
                break;
            case 'edc':
                $page = './pages/edc/edc.php';
                break;
            case 'detail-edc':
                $page = './pages/edc/detail.php';
                break;
            case 'kerusakan':
                $page = './pages/kerusakan/kerusakan.php';
                break;
            case 'detail-kerusakan':
                $page = './pages/kerusakan/detail.php';
                break;
            case 'costumer':
                $page = './pages/costumer/costumer.php';
                break;
            case 'detail-costumer':
                $page = './pages/costumer/detail.php';
                break;
            case 'teknisi':
                $page = './pages/teknisi/teknisi.php';
                break;
            case 'detail-teknisi':
                $page = './pages/teknisi/detail.php';
                break;
            default:
                $page = './pages/main/main.php';
                break;
        }
        return $page;
    } catch (PDOException $varError) {
        // For Debug Only
        echo "Connection Failed :" . $varError->getMessage();
    }
}