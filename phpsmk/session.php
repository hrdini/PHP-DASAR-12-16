    <nav>
        <ul>
            <li><a href="?menu=isi">Isi</a></li>
            <li><a href="?menu=hapus">Hapus</a></li>
            <li><a href="?menu=destroy">Destroy</a></li>
        </ul>
    </nav>

    <?php

        session_start();

        var_dump($_SESSION);

        echo '<br>';

        if (isset($_GET['menu'])){
            $menu = $_GET['menu'];

            echo $menu;

            switch ($menu) {
                case 'isi':
                    isisession();
                    break;

                    case 'hapus':
                        unset($_SESSION['user']);
                        break;

                    case 'destroy':
                        session_destroy();
                        break;

                default:
                    # code...
                    break;
            }
        }

        function isisession(){
            $_SESSION['user'] = 'Dini';

            $_SESSION['nama'] = 'Hardini Febrijati';

            $_SESSION['alamat'] = 'Sidoarjo';
        }
    ?>