<div class="container-5">
        <a href="index.php?page=menu_admin" class="Button-3"> ⬅ Retour</a>
        <a href="index.php?page=deconnexion" class="Button-3"> Déconnexion
        <div class="card">
        <img src="images/deco.png" height="16" width="16" alt="Card Back" title="Info trafic RER A">
        <img src="images/deco_hover.png" height="16" width="16" class="img-top" alt="Card Front" title="Info trafic RER B">
    </div> </a>
    </div>
    
    <div class="container-4"> 
    <nav>
        <h3 class="h3-2">Infos Trafic:</h3>
        <div class="image-container">
            <div class="tooltip">
                <img class="border-1" src="images/rer/A.png">
                    <span class="tooltiptext">
                        <?php 
                            if(empty($infoTraficA))
                            {
                                echo "Il n'y a aucun problème sur cette ligne";
                            } else 
                            {
                                foreach ($infoTraficA as $text) 
                                {
                                echo $text . "<br><br>";
                                } 
                            }
                        ?>
                    </span>
            </div>
            <div class="tooltip">
                <img class="border-1" src="images/rer/B.png">
                    <span class="tooltiptext">
                        <?php 
                            if(empty($infoTraficB))
                            {
                                echo "Il n'y a aucun problème sur cette ligne";
                            } else 
                            {
                                foreach ($infoTraficB as $text) 
                                {
                                echo $text . "<br><br>";
                                } 
                            }
                        ?>
                    </span>
            </div>
            <div class="tooltip">
                <img class="border-1" src="images/rer/C.png">
                    <span class="tooltiptext">
                        <?php 
                            if(empty($infoTraficC))
                            {
                                echo "Il n'y a aucun problème sur cette ligne";
                            } else 
                            {
                                foreach ($infoTraficC as $text) 
                                {
                                echo $text . "<br><br>";
                                } 
                            }
                        ?>
                    </span>
            </div>
            <div class="tooltip">
                <img class="border-1" src="images/rer/D.png">
                    <span class="tooltiptext">
                        <?php 
                            if(empty($infoTraficD))
                            {
                                echo "Il n'y a aucun problème sur cette ligne";
                            } else 
                            {
                                foreach ($infoTraficD as $text) 
                                {
                                echo $text . "<br><br>";
                                } 
                            }
                        ?>
                    </span>
            </div>
            <div class="tooltip">
                <img class="border-1" src="images/rer/E.png">
                    <span class="tooltiptext">
                        <?php 
                            if(empty($infoTraficE))
                            {
                                echo "Il n'y a aucun problème sur cette ligne";
                            } else 
                            {
                                foreach ($infoTraficE as $text) 
                                {
                                echo $text . "<br><br>";
                                } 
                            }
                        ?>
                    </span>
            </div>
        </div>
        <div class="image-container">
            <div class="tooltip">
                <img class="border-1" src="images/metro/1.png">
                    <span class="tooltiptext">
                        <?php 
                            if(empty($infoTrafic1))
                            {
                                echo "Il n'y a aucun problème sur cette ligne";
                            } else 
                            {
                                foreach ($infoTrafic1 as $text) 
                                {
                                echo $text . "<br><br>";
                                } 
                            }
                        ?>
                </span>
            </div>
            <div class="tooltip">
                <img class="border-1" src="images/metro/2.png">
                    <span class="tooltiptext">
                        <?php 
                            if(empty($infoTrafic2))
                            {
                                echo "Il n'y a aucun problème sur cette ligne";
                            } else 
                            {
                                foreach ($infoTrafic2 as $text) 
                                {
                                echo $text . "<br><br>";
                                } 
                            }
                        ?>
                </span>
            </div>
            <div class="tooltip">
                <img class="border-1" src="images/metro/3.png">
                    <span class="tooltiptext">
                        <?php 
                            if(empty($infoTrafic3))
                            {
                                echo "Il n'y a aucun problème sur cette ligne";
                            } else 
                            {
                                foreach ($infoTrafic3 as $text) 
                                {
                                echo $text . "<br><br>";
                                } 
                            }
                        ?>
                </span>
            </div>
            <div class="tooltip">
                <img class="border-1" src="images/metro/3bis.png">
                    <span class="tooltiptext">
                        <?php 
                            if(empty($infoTrafic3bis))
                            {
                                echo "Il n'y a aucun problème sur cette ligne";
                            } else 
                            {
                                foreach ($infoTrafic3bis as $text) 
                                {
                                echo $text . "<br><br>";
                                } 
                            }
                        ?>
                </span>
            </div>
            <div class="tooltip">
                <img class="border-1" src="images/metro/4.png">
                    <span class="tooltiptext">
                        <?php 
                            if(empty($infoTrafic4))
                            {
                                echo "Il n'y a aucun problème sur cette ligne";
                            } else 
                            {
                                foreach ($infoTrafic4 as $text) 
                                {
                                echo $text . "<br><br>";
                                } 
                            }
                        ?>
                </span>
            </div>
            <div class="tooltip">
                <img class="border-1" src="images/metro/5.png">
                    <span class="tooltiptext">
                        <?php 
                            if(empty($infoTrafic5))
                            {
                                echo "Il n'y a aucun problème sur cette ligne";
                            } else 
                            {
                                foreach ($infoTrafic5 as $text) 
                                {
                                echo $text . "<br><br>";
                                } 
                            }
                        ?>
                </span>
            </div>
            <div class="tooltip">
                <img class="border-1" src="images/metro/6.png">
                    <span class="tooltiptext">
                        <?php 
                            if(empty($infoTrafic6))
                            {
                                echo "Il n'y a aucun problème sur cette ligne";
                            } else 
                            {
                                foreach ($infoTrafic6 as $text) 
                                {
                                echo $text . "<br><br>";
                                } 
                            }
                        ?>
                </span>
            </div>
            <div class="tooltip">
                <img class="border-1" src="images/metro/7.png">
                    <span class="tooltiptext">
                        <?php 
                            if(empty($infoTrafic7))
                            {
                                echo "Il n'y a aucun problème sur cette ligne";
                            } else 
                            {
                                foreach ($infoTrafic7 as $text) 
                                {
                                echo $text . "<br><br>";
                                } 
                            }
                        ?>
                </span>
            </div>
        </div>
        <div class="image-container">
            <div class="tooltip">
                <img class="border-1" src="images/metro/7bis.png">
                    <span class="tooltiptext">
                        <?php 
                            if(empty($infoTrafic7bis))
                            {
                                echo "Il n'y a aucun problème sur cette ligne";
                            } else 
                            {
                                foreach ($infoTrafic7bis as $text) 
                                {
                                echo $text . "<br><br>";
                                } 
                            }
                        ?>
                </span>
            </div>
            <div class="tooltip">
                <img class="border-1" src="images/metro/8.png">
                    <span class="tooltiptext">
                        <?php 
                            if(empty($infoTrafic8))
                            {
                                echo "Il n'y a aucun problème sur cette ligne";
                            } else 
                            {
                                foreach ($infoTrafic8 as $text) 
                                {
                                echo $text . "<br><br>";
                                } 
                            }
                        ?>
                </span>
            </div>
            <div class="tooltip">
                <img class="border-1" src="images/metro/9.png">
                    <span class="tooltiptext">
                        <?php 
                            if(empty($infoTrafic9))
                            {
                                echo "Il n'y a aucun problème sur cette ligne";
                            } else 
                            {
                                foreach ($infoTrafic9 as $text) 
                                {
                                echo $text . "<br><br>";
                                } 
                            }
                        ?>
                </span>
            </div>
            <div class="tooltip">
                <img class="border-1" src="images/metro/10.png">
                    <span class="tooltiptext">
                        <?php 
                            if(empty($infoTrafic10))
                            {
                                echo "Il n'y a aucun problème sur cette ligne";
                            } else 
                            {
                                foreach ($infoTrafic10 as $text) 
                                {
                                echo $text . "<br><br>";
                                } 
                            }
                        ?>
                </span>
            </div>
            <div class="tooltip">
                <img class="border-1" src="images/metro/11.png">
                    <span class="tooltiptext">
                        <?php 
                            if(empty($infoTrafic11))
                            {
                                echo "Il n'y a aucun problème sur cette ligne";
                            } else 
                            {
                                foreach ($infoTrafic11 as $text) 
                                {
                                echo $text . "<br><br>";
                                } 
                            }
                        ?>
                </span>
            </div>
            <div class="tooltip">
                <img class="border-1" src="images/metro/12.png">
                    <span class="tooltiptext">
                        <?php 
                            if(empty($infoTrafic12))
                            {
                                echo "Il n'y a aucun problème sur cette ligne";
                            } else 
                            {
                                foreach ($infoTrafic12 as $text) 
                                {
                                echo $text . "<br><br>";
                                } 
                            }
                        ?>
                </span>
            </div>
            <div class="tooltip">
                <img class="border-1" src="images/metro/13.png">
                    <span class="tooltiptext">
                        <?php 
                            if(empty($infoTrafic13))
                            {
                                echo "Il n'y a aucun problème sur cette ligne";
                            } else 
                            {
                                foreach ($infoTrafic13 as $text) 
                                {
                                echo $text . "<br><br>";
                                } 
                            }
                        ?>
                </span>
            </div>
            <div class="tooltip">
                <img class="border-1" src="images/metro/14.png">
                    <span class="tooltiptext">
                        <?php 
                            if(empty($infoTrafic14))
                            {
                                echo "Il n'y a aucun problème sur cette ligne";
                            } else 
                            {
                                foreach ($infoTrafic14 as $text) 
                                {
                                echo $text . "<br><br>";
                                } 
                            }
                        ?>
                </span>
            </div>
        </div>
    </nav>
 <a ></a>
    <nav>
        <h3>Billets de Retards:</h3>
        <form action="menu_etudiant.php" method="get" class="form-2 container-form">
        <div class="form">
            <select name="Entreprise" id="entreprise" class="choix">
                <option value="">Choisir le type:</option>
                <option value="1">RER</option>
                <option value="2">Metro</option>
            </select>
        
            <select name="Entreprise" id="entreprise" class="choix">
                <option value="">Choisir la ligne:</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
                <input type="submit" class="submit" value="Creer les billets">
            </div>
        </div>
     </form>
    </nav>
    </div>

