<h1> PROJET CC </h1>
<p> Auteur :</p>
<ul>
<li> BESNIER Corentin</li>
</ul>
<p>=======================================</p>

<h3> Question 1 : </h3>
<p> symfony new my_project </p>
<p> composer.phar require symfony/webpack-encore-bundle </p>
<p> npm install bootstrap --save-dev</p>
<p> npm install </p>
<p> npm run watch </p>

<p>=======================================</p>
<h3> Question 2 : </h3>
<p> symfony console make:entity </p>
<li> <i>nous nommerons notre entité "Activity"</i></li>
<p> composer.phar require symfony/orm-pack</p>
<p> symfony console doctrine:database:create </p>
<p>=======================================</p>
<h3> Question 3 :</h3>
<p> composer.phar require --dev orm-fixtures</p>
<p> composer.phar require fakerphp/faker --dev </p>
<h5> Après création d'un fixture dans le ficher App.Fixtures.php :</h5>
<p> symfony console doctrine:fixtures:load </p>
<p><i>cela nous génèrera une table contenant une seule activité, générée par faker.</i></p>
<p>=======================================</p>
<h3> Question 4 :</h3>
<p> symfony console make:crud </p>
<li> <i>donner le même nom que notre entité </i></li>
<p>=======================================</p>
<h3> Question 5 :</h3>
<p> les seules commandes symfony utilisées ici sont </p>
<ul>
<li> symfony server:start --no-tls --d</li>
<li> symfony server:stop</li>
</ul>
<p> pour tester nos pages ainsi que nos implémentations (retrouvables dans les dossier <b>*template*</b> et <b>*Controller*</b></p>
<p>=======================================</p>
<h3> Question 6 :</h3>
<p> composer.phar require cebe/markdown</p>
<i>à finir</i>
<p>=======================================</p>
<h3>Question 7 :</h3>
<h5>symfony console make:user</h5>
<ul>
<li> <i>tous les paramètres ont été laissé par défaut</i></li>
<li> poperty name : <i>login</i></li>
</ul>
<h5> symfony console make:auth</h5>
<ul>
<li><i>login from authenticator</i></li>
<li>class name : <i>UserAuthentificator</i></li>
<li>default</li>
<li>default</li>
</ul>
<h5> symfony console make:registration-form</h5>
<ul>
<li>default</li>
<li>no</li>
<li>default</li>
</ul>
<p>=======================================</p>
<h3> Question 8 :</h3>
<p>On modifie l'entité Activity pour y rajouter une relation <i><b>ManyToOne</b></i> avec l'entity User :</p>
<ul>
<li> symfony console make entity <<i>on resélectionne Activity</i>></li>
<li> <i>property name :</i> animateur</li>
<li><i>Field Type :</i> relation</li>
<li><i>Related to :</i> User</li>
<li><i>Relation Type :</i> ManyToOne</li>
<li><i>Allowed to be null ?</i> no</li>
<li>default</li>
<li>default</li>
</ul>

<p>on modifie le fichier AppFixtures.php pour que toutes les activités aient un animateur par défaut qui est l'animateur possédant l'id , que l'on génère via Faker</p> </br>
<p> enfin, on migrate les nouvelles données dans la base.</p>
<p>=======================================</p>
<h3>Question 9 :</h3>
<p> Pour commencer, nous avons été modifier le fichier <i>security.yaml</i> pour y ajouter le rôle animator.</p>
<p>Ensuite, nous avons été rajouter un commentaire <i><b>@IsGranted("ROLE_ANIMATOR")</b></i> dans le fichier <i>ActivityController.php</i>, au dessus de la fonction new, afin que seuls les users possédant le rôle animator puissent créer une nouvelle activité.</p></br>
<p>Enfin, nous avons rajouter une ligne dans la fonction new() qui s'occupe de définit l'animateur de l'activité comme étant le créateur de cette même activité (en se basant sur la personne qui soumet la requête de création.)</p>
<p>=======================================</p>
<h3>Question 10 :</h3> 
<p>Il ne faut pas qu'un utilisateur normal puisse interférer avec une activité autrement que en s'y inscrivant ou en demandant d'afficher plus de détails. Ainsi, nous modifions les autorisations pour que les fonctions <i>edit()</i> et <i>delete()</i> soient soumises aux mêmes restrictions que <i>new()</i>.</p> 
<p><i>En soit, il n'est pas nécessaire de mettre ces conditions sur la fonction delete() car celle-ci n'est accessible que via la fonction edit(). Nous préférons quand même la mettre au cas où quelqu'un réussirait à contourner notre sécurité.</i></p>
<p>=======================================</p>
<h3>Question 12:</h3>
<p> On commence par rajouter une nouvelle relations ManyToMany entre les tables Activity et User (pour pouvoir y stocker l'ensemble des participants à une activité).</p>
<ul>
<li> symfony console make entity <<i>on resélectionne Activity</i>></li>
<li> <i>property name :</i> participant</li>
<li><i>Field Type :</i> relation</li>
<li><i>Related to :</i> User</li>
<li><i>Relation Type :</i> ManyToMany</li>
<li>default</li>
<li><i>Field Name :</i> Inscrits</li>
</ul>
<p> Ensuite on met à jour la migration :</p>
<ul>
<li>symfony console make:migration</li>
<li>symfony console doctrine:migrations:migrate</li>
</ul>
<p> Après, on rajoute l'option pour s'incrire et on modifie les règles de sécurité pour que l'on puisse s'inscrire à une activité que si on est connecté.</p>
<p> On a ensuite modifié le crud pour qu'il soit dynamique (ie : que les boutons "edit" et "create" ne s'affichent que si un animateur est connecté...</p>
<p> Enfin, nous avons rajouté l'option pour se désinscrire.</p>
<p>=======================================</p>
<h3>Question 13:</h3>
<p> On a ici rajouté deux nouvelles fonctionnalités : <i>showParticipants</i> et <i>showInscriptions</i></p>
<p> nous les avons aussi rendues dynamiques (seuls les animateurs ont accès à la fonctionnalité <i>showParticipants</i>)</p>
<p> On vérifie aussi que l'animateur est bien le créateur de l'activité avant d'afficher les participants.</p>
<p>=======================================</p>
<h3> Question 15 :</h3>
<p> On commence par rendre la navbar dynamique, en faisant en sorte que le boutons <i>Se Connecter</i> devienne <i>Se Déconnecter</i> après connexion, et qu'un nouvel onglet <i>Animateur</i> apparaisse si un admin est connecté.</p>
<p> On crée ensuite un crud pour pouvoir gérer Créer/Supprimer des Animateurs.</p>
<li> symfony console make:crud <i>(User)</i></li>
<p> On fait ensuite en sorte que le lien <i>Animateur</i> de notre navbar redirige sur ce Crud.</p>
<p> Enfin, on adpate le Crud au sujet.</p>
<p>=======================================</p>
<h3>Question 16 :</h3>
<p> pour différencier et privatiser le site des animateurs du site des utilisateurs classiques, nous avons modifié le fichier <i>security.yaml</i> pour rajouter :</p>

    access_control:
        - { path: ^/animator, roles: ROLE_ANIMATOR}

    role_hierarchy:
        ROLE_ADMIN: ROLE_ANIMATOR

<p> puis nous avons modifié nos controlleurs ainsi que notre navbar afin de changer l'url des features réservées aux animateurs.</p>

<p>=======================================</p>
<p> Pour plus de practicité au vue de notre faker, nous avons fixé 3 mots de passe afin que les test soient plus faciles à faire.</p>
<p> En effet, lorque nous avons créé l'interface de login, nous avons choisi de hasher les mots de passe. Hors notre faker ne le fait pas de son côté, ce qui fait que les comptes qu'il génère en full auto comporte des mots de passe non hashés, mais lorsque nous le rentrons dans la login page, celui-ci se hashe avant d'envoyer la requête à notre BDD, ayant pour conséquence de nous retourner <i>"mot de passe incorrect"</i></p>
<p> Voici les trois mots de passe fixés pour ne pas avoir à recréer de comptes à chaque test :</p>

    Admin : 0123456789
    Animateur : qsdfghjklm 
    Enfant : azertyuiop
<p> Nous avons laissé un compte généré totalement par faker pour vous montrer que ce n'est pas un problème de le faire aussi</p>
<p> Les comptes aux mots de passe fixés sont reconnaissables dans la base de données car le hash est le même (donc ils commencent toujours de la même manière)</p>
