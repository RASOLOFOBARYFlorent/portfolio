
<?php
  require 'database.php';
  // insert into my database 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Cree par Florent</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <canvas id="canvas">

        </canvas>
        <div class="liens">
            <img src="/icones/menu1.svg" alt="" id="img">
            <ul>
                
                <li><a href="#apropos"><img src="image/img3.jpg" alt="" id="me"><span>A propos</span></a></li>
                <li><a href="#services"><img src="/icones/event.svg" alt=""><span>Mes services</span></a></li>
                <li><a href="#contact"><img src="/icones/phone.svg" alt=""><span>Contactez-moi</span></a></li>
            </ul>
        </div>
    </div>
    <div class="default">
        <div class="home defaultleft">
            <img src="/image/img3.jpg" alt="">
        </div>
        <div class="home defaultmiddle">
            <h3>Moi c'est <span> RASOLOFOBARY Florent</span></h3>
            <h3>Je suis a la fois <span> developpeur</span> et <span>Physicien</span></h3>
            <h3>Ayant aussi des connaissances sur la <span> Topographie</span></h3>
        </div>
        <div class="home defaultright">
            <div class="watch">
                <div class="fleche">
                    <div id="" class="fl heu" style="--l:60px; --c:blue; --w:5px">
                        <span></span>
                    </div>
                    <div id=""  class="fl min"style="--l:80px; --c:white; --w:3px">
                        <span></span>
                    </div>
                    <div id="" class="fl sec" style="--l:100px; --c:yellow; --w:2px">
                        <span></span>
                    </div>
                </div>
                <ul>
                    <li style="--i:1;"><span>1</span></li>
                    <li style="--i:2;"><span>2</span></li>
                    <li style="--i:3;"><span>3</span></li>
                    <li style="--i:4;"><span>4</span></li>
                    <li style="--i:5;"><span>5</span></li>
                    <li style="--i:6;"><span>6</span></li>
                    <li style="--i:7;"><span>7</span></li>
                    <li style="--i:8;"><span>8</span></li>
                    <li style="--i:9;"><span>9</span></li>
                    <li style="--i:10;"><span>10</span></li>
                    <li style="--i:11;"><span>11</span></li>
                    <li style="--i:12;"><span>12</span></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- A propos de moi  -->
    
    <div id="apropos" style="display: none;">
        <div class="aproposcontainer">
            <div class="imageaveccv">
                <img src="/image/img3.jpg" alt="">
                <a href="/cv.pdf">Trouver ici mon cv</a>
            </div>
            <div class="biography">
                <h2>Nom: <span>RASOLOFOBARY Florent</span></h2>
                <div class="lineseparator" style="max-width:300px"></div>
                <h2 class="title">Mes Specialités </h2>
                <div class="lineseparator" style="max-width:140px"></div>   
                <div class="specialite">
                    <div class="spec html" style="--cont:108">
                        <h2>HTML</h2>
                        <div class="cont" >
                            <h1>70%</h1>
                        </div>
                    </div>
                    <div class="spec css" style="--cont:108">
                        <h2>CSS</h2>
                        <div class="cont" >
                            <h1>70%</h1>
                        </div>
                    </div>
                    <div class="spec javascript" style="--cont:144">
                        <h2>Javascript</h2>
                        <div class="cont" >
                            <h1>60%</h1>
                        </div>
                    </div>
                    <div class="spec php" style="--cont:144">
                        <h2>PHP</h2>
                        <div class="cont" >
                            <h1>60%</h1>
                        </div>
                    </div>
                    <div class="spec qgis" style="--cont:216">
                        <h2>QGIS</h2>
                        <div class="cont" >
                            <h1>40%</h1>
                        </div>
                    </div>
                    <div class="spec basededonnerel" style="--cont:180">
                        <h2>Base de données</h2>
                        <div class="cont" >
                            <h1>50%</h1>
                        </div>
                    </div>
                    <div class="spec physiqueapplique"style="--cont:144">
                        <h2>Technique nucléaire</h2>
                        <div class="cont" >
                            <h1>60%</h1>
                        </div>
                    </div>
                </div>
                <div class="lineseparator" style="max-width:300px"></div>
                <h2>Email: <span>rasolofobaryflorent@gmail.com</span></h2>
                <h2>Adresse: <span>Antananarivo, Madagascar</span></h2>
                <h2>Numero: <span>+261 34 44 564 94</span></h2>
                <h2>Modalité de service: <span>Freelance</span></h2>
            </div>
        </div>
        
        <a href="https://github.com/RASOLOFOBARYFlorent">Retrouvez mes projets</a>
    </div>

    <!-- Mes services -->
    <div id="services" style="display: none;">
        <div class="services">
            <div class="lineseparator" style="max-width: 660px;"></div>
            <h1 id="titleservice">Services</h1>
            <div class="lineseparator" style="max-width:140px"></div>
            <div class="contservice">
                <div class="service">
                    <h1>Developpement Frontend</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Officiis sed quidem temporibus tempora nesciunt! Dolores,
                          totam!
                    </p>
                    <a href="https://github.com/RASOLOFOBARYFlorent"><img src="/icones/githubblue.svg" alt=""> Exemple</a>
                </div>
                <div class="service">
                    <h1>Creation base de données</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Officiis sed quidem temporibus tempora nesciunt! Dolores,
                          totam!
                    </p>
                    <a href="https://github.com/RASOLOFOBARYFlorent"><img src="/icones/githubblue.svg" alt=""> Exemple</a>
                </div>
                <div class="service">
                    <h1>Creation site complet</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Officiis sed quidem temporibus tempora nesciunt! Dolores,
                          totam!
                    </p>
                    <a href="https://github.com/RASOLOFOBARYFlorent"><img src="/icones/githubblue.svg" alt=""> Exemple</a>
                </div>
                <div class="service">
                    <h1>Algorithme</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Officiis sed quidem temporibus tempora nesciunt! Dolores,
                          totam!
                    </p>
                    <a href=""><img src="/icones/githubblue.svg" alt=""> En cours</a>
                </div>
                <div class="service">
                    <h1>Application techniques nucléaires</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Officiis sed quidem temporibus tempora nesciunt! Dolores,
                          totam!
                    </p>
                    <a href=""><img src="/icones/githubblue.svg" alt=""> En cours</a>
                </div>
                <div class="service">
                    <h1>Management de qualité</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Officiis sed quidem temporibus tempora nesciunt! Dolores,
                          totam!
                    </p>
                    <a href="https://github.com/RASOLOFOBARYFlorent"><img src="/icones/githubblue.svg" alt=""> En cours</a>
                </div>
            </div>
        </div>
        <div class="educations">
        <div class="lineseparator" style="max-width: 660px;"></div>
            <h1 id="titleeducation">
                Educations
            </h1>
            <div class="lineseparator" style="max-width:140px"></div>
            <div class="conteduc">
                <div class="education">
                    <h1>Developpement Web</h1>
                    <h2>Chez Sayna </h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Consequatur ad possimus aliquam iusto doloremque repellendus eligendi,
                         explicabo quis excepturi ratione alias nobis qui,
                         iste aperiam necessitatibus est aliquid veniam assumenda?
                    </p>
                </div>
                <div class="education">
                    <h1>Physique et Applications</h1>
                    <h2>Chez l'Universite d'Antananarivo </h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Consequatur ad possimus aliquam iusto doloremque repellendus eligendi,
                         explicabo quis excepturi ratione alias nobis qui,
                         iste aperiam necessitatibus est aliquid veniam assumenda?
                    </p>
                </div>
                <div class="education">
                    <h1>Langue Anglaise</h1>
                    <h2>Chez CNELA </h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Consequatur ad possimus aliquam iusto doloremque repellendus eligendi,
                         explicabo quis excepturi ratione alias nobis qui,
                         iste aperiam necessitatibus est aliquid veniam assumenda?
                    </p>
                </div>
            </div>
        </div>
    </div>


 <?php if(isset($_POST['submit'])):?>
   <?php if(!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['phone'])&&!empty($_POST['message'])) :?>
      <?php $name=$_POST['name'];?>
      <?php $email=$_POST['email'];?>
      <?php $phone=$_POST['phone'];?>
      <?php $message=$_POST['message'];?>
      <?php $req=$db->prepare("INSERT INTO message_client VALUES('',?,?,?,?)");?>
      <?php $req->execute([$name,$email,$phone,$message]); ?>
      <?php

      //To send the informations  to my email adress rasolofobaryflorent@gmail.com
      $to='rasolofobaryflorent@gmail.com';
      $subject='You have some message from'.$email;
      $newemailmessage='
          <p>Hey Florent you have been received an email from <strong>'.$email.'</strong></p>
          <p>Name :<strong>'.$name.'</strong></p> 
          <p>Phone number :<strong>'.$phone.'</strong></p>
          <p>Message :<strong>'.$message.'</strong></p>
      ';
      $header='Content-type: text/html'.'\n\r';
      $header='< From'.$email.'>'.'\n\r';
         mail($to,$subject,$newemailmessage,$header);

      ?>
      <?php else:?>
                <script>alert('Tous les champs sont obligatoires');</script>
       <?php endif;?>
      <?php endif;?>
<!-- Mes contacts -->
    <div id="contact" style="display: none;">
        <div class="lineseparator"></div>
        <h1 id="contactme">Donnez-moi vos avis</h1>

        <div class="formulaire">
            <form action="index.php" method="post">
                <div class="mainform">
                      <div class="nomemail">
                          <input type="text" name="name" id="" placeholder="Entrer ici votre nom">
                          <input type="email" name="email" id="" placeholder="Entre ici votre email">
                      </div>
                      <input type="number"  name="phone" placeholder="Votre numéro">
                      <textarea name="message" id="" cols="30" rows="10" placeholder="Votre message"></textarea>
                </div>


                <input type="submit" value="Envoyer" name="submit">
            </form>
        </div>
       
        <div class="moncontact">
            <div class="lineseparator"></div>
            <h1 id="h1">
                Contactez-moi directement avec mon
            </h1>
            <div class="mescontacts">
                <div class="container">
                    <img src="/icones/phone.svg" alt="">
                    <h1>Numero</h1>
                    <h2>+261 34 44 564 94</h2>
                </div>
                <div class="container">
                    <img src="icones/eye.svg" alt="">
                    <h1>Email</h1>
                    <h2>rasolofobaryflorent@gmail.com</h2>
                </div>
                <div class="container">
                    <img src="/icones/localisation.svg" alt="">
                    <h1>Adresse</h1>
                    <h2>Andraisoro Antananarivo, Madagascar</h2>
                </div>
    
            </div>
        </div>
    </div>



    <!-- footer de la page -->

    <div class="lineseparator">

    </div>
<div class="footer">
    <div class="ft right">
        <h1>Liens rapides</h1>
        <ul>
            <li><a href="#apropos">A propos</a></li>
            <li><a href="#contact">Contactez-moi</a></li>
            <li><a href="#services">Services</a></li>
        </ul>
    </div>
    <div class="ft middle">
        <h1>Retrouvez-moi</h1>
        <ul>
            <li><a href="https://facebook.com/florent.rasolofobary"><img src="/icones/facebook.svg" alt=""><span>Facebook</span></a></li>
            <li><a href="mailto:rasolofobaryflorent@gmail.com"><img src="/icones/email1.svg" alt=""><span>Email</span></a></li>
            <li><a href="https://www.linkedin.com/in/florent-rasolofobary-44018a269"><img src="/icones/linkedin.svg" alt=""><span>Linkdin</span></a></li>
            <li><a href="https://github.com/RASOLOFOBARYFlorent"><img src="/icones/githubblue.svg" alt=""><span>Github</span></a></li>
        </ul>
    </div>
    <div class="ft left">
        <h1>Mes projets</h1>
        <ul>
            <li><a href="https://github.com/RASOLOFOBARYFlorent"><img src="/icones/githubblue.svg" alt=""><span>Suivit vol</span></a></li>
            <li><a href="https://github.com/RASOLOFOBARYFlorent"><img src="/icones/githubblue.svg" alt=""><span>Quiz javascript</span></a></li>
            <li><a href="https://github.com/RASOLOFOBARYFlorent"><img src="/icones/githubblue.svg" alt=""><span>Space odyssey</span></a></li>
        </ul>
    </div>


</div>



    <script>
        var canvas=document.querySelector('#canvas');
        var ctx=canvas.getContext('2d');
        ctx.font='40px serif';
        ctx.strokeText('SOLO WEB',20,80);
        

    //   script pour le montre
          let minute=document.getElementsByClassName('min')[0];
          let seconde=document.getElementsByClassName('sec')[0];
          let heure=document.getElementsByClassName('heu')[0];
          

          function displayhours(){
             let date=new Date();
             let h=date.getHours();
             let m=date.getMinutes();
             let s=date.getSeconds();
             // On tourne de 6 degre toujours et ça donne 1 tour complet après 60 secondes
             minute.style.transform='rotate('+6*m+'deg)';

             // On tourne de 30 degre toujours et ça donne 1 tour complet après 12 heures
             heure.style.transform='rotate('+30*h+'deg)';

             // On tourne de 6 degre toujours et ça donne 1 tour complet après 60 minutes
             seconde.style.transform='rotate('+6*s+'deg)';

          }
          setInterval(displayhours,1000);

          //Pour faire apparaitre le div si le lien qui lui corresponds est cliqué 
          let services=document.querySelectorAll("a[href='#services']");
          let contact=document.querySelectorAll("a[href='#contact']");
          let apropos=document.querySelectorAll("a[href='#apropos']");
          let aproposcont=document.querySelector("div[id='apropos']");
          let contactcont=document.querySelector("div[id='contact']");
          let servicescont=document.querySelector("div[id='services']");
          apropos.forEach(apropos=>{
            
              apropos.addEventListener('click',()=>{
                 contactcont.style.display='none';
                 servicescont.style.display='none';
                 aproposcont.style.display='block';
                 

              });
            
            }
          );
          
          services.forEach(services=>{
                   services.addEventListener('click',()=>{
                       servicescont.style.display='block';
                       contactcont.style.display='none';
                       aproposcont.style.display='none';
                        });
                       }
                   );
                   

          contact.forEach(contact=>{
                   contact.addEventListener('click',()=>{
                         contactcont.style.display='block';
                         aproposcont.style.display='none';
                         servicescont.style.display='none';
                       });
                    }
                );

    </script>
</body>
</html>