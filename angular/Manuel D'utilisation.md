# Bienvenue sur le guide d'utilisation de NetPrime Plus Video !
# Ce projet a été mené au bien par :
# - Corentin BESNIER
# - Thomas DEBLOCK
# - Mathieu BONGIBAULT
# - Bastien BERTUEL

# Bon visionnage !
# ======================================================================================================================================================================================================================
# **Question n°1 :**
# Nous avons choisi cette fois de ne pas utiliser *DOCKER*, car certains membres du groupe n'avaient pas linux et que c'était plus simple au niveau de l'organisation de coder sous *WINDOWS*.
# Pour créer le projet, nous avons utilisé la commande suivante : ***ng new NetPrime_Plus_Video***
# *Nous avons pris **SCSS** comme style et avons installé le router Angular proposé.*
# ======================================================================================================================================================================================================================
# Question n°2 :
# Nous avons d'abord créé les composants film et accueil :
```angular2html
ng generate component accueil
ng generate component film
```
# Puis nous avons été déclarés les routes dans *app-routing.module.ts*
```typescript
import {FilmComponent} from "./film/film.component";
import {AccueilComponent} from "./accueil/accueil.component";

const routes: Routes = [
  {path: '', component: AccueilComponent},
  {path: 'film', component: FilmComponent},
];
```
# Nous avons enfin vidé le fichier *app.component.html* afin de ne garder que la ligne 
```html
<router-outlet></router-outlet>
```
# ======================================================================================================================================================================================================================
# Question n°3 :
# Nous commençons par importer les librairies bootstrap et jquery a notre application :
```angular2html
npm install bootstrap
npm install jquery
```
# puis nous "importons" véritablement bootstrap dans le header de notre index :
```html
<link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
```
# Il ne nous reste plus qu'à créer notre NavBar dans le fichier *app.component.html* car notre NavBar est statique, donc on la définie ici afin de ne pas avoir à le faire sur chaque nouvelle page à l'avenir:
```html
<nav class="navbar navbar-expand-lg navbar-light bg-custom">
  <a class="navbar-brand" href=""> NetPrimePlus Video    |</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" routerLink="">Acceuil </a>
      <a class="nav-item nav-link" routerLink="/film">Film </a>
    </div>
  </div>
</nav>
```
# ======================================================================================================================================================================================================================
# Question n°4 :
# Nous commençons d'abord par installer les packages :
```angular2html
ng add @angular/pwa
```
# Ensuite, nous créons les dossiers *src/app/entity* et *src/services*, puis nous créons l'entité *Categorie*, en lui donnant comme unique paramètre un nom.
```typescript
export interface Categorie {
  nom: string
}
```
# Puis nous développons tout le nécessaire dans le fichier *services/categorie.service.ts*
```typescript
import { Injectable } from '@angular/core';
import {Categorie} from "../app/entity/Categorie";

@Injectable({
  providedIn: 'root'
})
export class CategorieService {

  private Categorie: Map<bigint, Categorie> = new Map().set(BigInt(-1),
    {
      id: BigInt(-1), nom: "Romance"
    })
    .set(BigInt(-2),{
      id: BigInt(-2), nom: "Comédie"
    })
    .set(BigInt(-3),{
      id: BigInt(-3), nom: "Aventure"
    })
    .set(BigInt(-4),{
      id: BigInt(-4), nom: "Drame"
    })
    .set(BigInt(-5),{
      id: BigInt(-5), nom: "Anime"
    })
    .set(BigInt(-6),{
      id: BigInt(-6), nom: "Science-Fiction"
    })

  public all(): Map<bigint, Categorie>{
    return this.Categorie
  }

  public CategorieFromId(id: bigint): Categorie | undefined{
    return this.Categorie.get(id)
  }

  public deleteCategorieFromId(id: bigint): boolean{
    return this.Categorie.delete(id)
  }

  public createCategorie(cat: Categorie):void{
    let newCategorie: Categorie = {
      nom: cat.nom,
    }
    this.Categorie.set(CategorieService.maximum(this.Categorie.keys())+BigInt(1), newCategorie)
  }

  public modifyCategorie(id: bigint, cat:Categorie): void{
    this.Categorie.set(id, cat)
  }

  constructor() {
  }

  private static maximum(array: IterableIterator<bigint>): bigint{
    let max: bigint = BigInt(0)
    for(let n of array)
      if(n>max) max=n
    return max
  }
}
```
# Enfin, nous vérifions l'implémentation au niveau du Composant *Film*. Pour cela, nous rajoutons, dans *film.component.ts* :
```typescript
categories: Map<bigint, Categorie> = new Map()
constructor(public categorieService: CategorieService){}
ngOnInit(): void {this.categories = this.categorieService.all()}
```
# et dans *film.component.html* :
```angular2html
<div name="categories">
  <ul>
    <p>Voici les Catégories disponibles:</p>
    <li *ngFor="let cat of categories.values()">{{ cat.nom }}</li>
  </ul>
</div>
```
# ======================================================================================================================================================================================================================
# Question n°5 :
# Comme pour la question précédente, nous créons l'entité *film* ainsi que son service associé :
# *dans entity/* :
```typescript
export interface Film {
  titre: string
  duree: number
  resume: string
  version: string
  categorie: string
}
```
# génération du service :
```angular2html
ng generate service Film
```
# *dans services*, après avoir déplacé nos fichiers fraichement créés dans le dossier:
```typescript
import { Injectable } from '@angular/core';
import {Film} from "../app/entity/Film";

@Injectable({
  providedIn: 'root'
})
export class FilmService {
  private Film: Map<bigint, Film> = new Map().set(BigInt(-1),
    {
      id: BigInt(-1), titre: "La liste de Schindler", duree:195, resume: "liste de schindler", version: "française", categorie: "Drame"
    })
    .set(BigInt(-2),{
      id: BigInt(-2), titre: "La folle aventure de Max et Léon", duree:98, resume:"Max et Léon", version: "française", categorie: "Comédie"
    })
    .set(BigInt(-3),{
      id: BigInt(-3), titre: "Angélique, marquise des anges", duree:115, resume: "LOOOOOOOVER", version:"française", categorie: "Romance"
    })
    .set(BigInt(-4),{
      id: BigInt(-4), titre: "Interstellar", duree:169, resume: "le GOAT", version: "originale", categorie:"Science-Fiction"
    })
    .set(BigInt(-5),{
      id: BigInt(-5), titre: "Jumanji", duree:100, resume: "jumanji", version: "originale", categorie:"Aventure"
    })
    .set(BigInt(-6),{
      id: BigInt(-6), titre: "Sword Art Online: Progressive", duree:98, resume:"sao", version:"originale", categorie:"Anime"
    })
    .set(BigInt(-7),{
      id: BigInt(-2), titre: "Les Gendarmes de St-Tropez", duree:90, resume:"tro marrant", version: "française", categorie: "Comédie"
    })
      .set(BigInt(-8),{
        id: BigInt(-3), titre: "50 Nuances de Grey", duree:125, resume: "oscour", version:"originale", categorie: "Romance"
      })
      .set(BigInt(-9),{
        id: BigInt(-4), titre: "Les Gardiens de la Galaxie", duree:122, resume: "énorme", version: "originale", categorie:"Science-Fiction"
      })
      .set(BigInt(-10),{
        id: BigInt(-5), titre: "Mandibules", duree:77, resume: "mdr la mouche", version: "française", categorie:"Aventure"
      })
      .set(BigInt(-11),{
        id: BigInt(-6), titre: "Hello World", duree:97, resume:"connait pas", version:"originale", categorie:"Anime"
      })
    .set(BigInt(-12),{
      id: BigInt(-6), titre: "La ligne Verte", duree:189, resume:"ouin", version:"française", categorie:"Drame"
    })

  public all(): Map<bigint, Film>{
    return this.Film
  }

  public CategorieFromId(id: bigint): Film | undefined{
    return this.Film.get(id)
  }

  public deleteCategorieFromId(id: bigint): boolean{
    return this.Film.delete(id)
  }

  public createFilm(f: Film):void{
    let newFilm: Film = {
      titre: f.titre,
      duree: f.duree,
      resume: f.resume,
      version: f.version,
      categorie: f.categorie
    }
    this.Film.set(FilmService.maximum(this.Film.keys())+BigInt(1), newFilm)
  }

  public modifyFilm(id: bigint, f:Film): void{
    this.Film .set(id, f)
  }

  constructor() {
  }

  private static maximum(array: IterableIterator<bigint>): bigint{
    let max: bigint = BigInt(0)
    for(let n of array)
      if(n>max) max=n
    return max
  }

}
```
#Enfin, nous modifions *film.component.ts* et *film.component.html* pour vérifier que tout fonctionne :
# dans *film.component.ts* :
```typescript
import { Component, OnInit } from '@angular/core';
import {Categorie} from "../entity/Categorie";
import {CategorieService} from "../../services/categorie.service";
import {FilmService} from "../../services/film.service";
import {Film} from "../entity/Film";

@Component({
  selector: 'app-film',
  templateUrl: './film.component.html',
  styleUrls: ['./film.component.scss']
})
export class FilmComponent implements OnInit {
  categories: Map<bigint, Categorie> = new Map()
  film: Map<bigint, Film> = new Map()

  constructor(public categorieService: CategorieService, public filmService: FilmService){}

  ngOnInit(): void {this.categories = this.categorieService.all(), this.film = this.filmService.all()}

}
```
# dans *film.component.html* :
```html
<div name="films">
  <ul>
    <h1><b>Liste des films disponibles :</b></h1>
    <li *ngFor="let f of film.values()"> {{f.titre}} | {{f.categorie}} | {{f.duree}} | {{f.version}} | {{f.resume}}</li>
  </ul>
</div>
```
# ======================================================================================================================================================================================================================
# Question n°6 :
# On commence par générer tous les composants :
```angular2html
ng generate component afficher_films
ng generate component ajouter_films
ng generate component supprimer_films
```
# Après réorganisation, on commence par le composant permettant d'afficher la liste de tous les films :
# *dans app/afficher-films/afficher-films-components.ts* :
```typescript
import { Component, OnInit } from '@angular/core';
import {FilmService} from "../../services/film.service";
import {Film} from "../entity/Film";

@Component({
  selector: 'app-afficher-films',
  templateUrl: './afficher-films.component.html',
  styleUrls: ['./afficher-films.component.scss']
})
export class AfficherFilmsComponent implements OnInit {
  film: Map<bigint, Film> | undefined = undefined

  constructor(public filmService: FilmService) {}

  public afficher():void{
    this.film = new Map()
    this.film = this.filmService.all()
  }

  ngOnInit(): void {
  }

}
```
# *dans app/afficher-films/afficher-films-components.html* :
```angular2html
<button *ngIf="film === undefined" (click)="afficher()"> Afficher tous les films </button>

<div name="categories">
  <ul *ngIf="film !== undefined">
    <p>Voici les Films disponibles:</p>
    <li *ngFor="let f of film.values()">{{ f.titre }}</li>
  </ul>
</div>
```
# On s'attaque ensuite au composant permettant de supprimer un film de la liste. Pour cela, il nous faut deux nouvelles fonctions :
```typescript
  public getID(f:Film): bigint | undefined{
    for (let [key, value] of this.Film.entries()) {
      if (value === f)
        return key;
    }
    return undefined
  }

  public findFilm(titre: string): Film | undefined{
    for (let [key, value] of this.Film.entries()) {
      if (value.titre === titre)
        return value;
    }
    return undefined
  }
```
# getId() nous permet de récupérer l'id du film donné en paramètre et findFilm() nous permet de récupérer un film à partir de son titre.
# *dans app/supprimer-film/supprimer-film-componants.ts* :
```typescript

@Component({
  selector: 'app-supprimer-film',
  templateUrl: './supprimer-film.component.html',
  styleUrls: ['./supprimer-film.component.scss']
})
export class SupprimerFilmComponent implements OnInit {
  id: bigint | undefined = undefined
  film: Film ={
    titre:"",
    duree: "",
    version: "",
    resume: "",
    categorie: "",
  }

  public delete(titre: string){
    let leFilm = this.filmService.findFilm(titre)
    if(leFilm !== undefined){
      this.film = leFilm
      let key = this.filmService.getID(this.film)
      if(key !== undefined) {
        this.filmService.deleteFilmFromId(key)
      }
    }
  }
  constructor(public filmService: FilmService) { }

  ngOnInit(): void {
  }

}
```
# dans *app/supprimer-film/supprimer-film-componants.html* :
```angular2html
<form *ngIf="film!==undefined">
  <label>Choisir un film a supprimer : </label>
  <select #leFilm value="{{film.titre}}">
    <option *ngFor="let f of filmService.all().values()" value="{{f.titre}}">{{ f.titre }}</option>
  </select>
  <br/>
  <button *ngIf="id===undefined" (click)="delete(leFilm.value)"> Supprimer </button>
</form>
```
# enfin, nous nous attaquons au composant permettant d'ajouter/modifier un film :
# *dans app/ajouter-film/ajouter-film.components.ts* :
```typescript
import { Component, OnInit } from '@angular/core';
import {Film} from "../entity/Film";
import {Categorie} from "../entity/Categorie";
import {CategorieService} from "../../services/categorie.service";
import { Location } from '@angular/common';
import {FilmService} from "../../services/film.service";
import {ActivatedRoute} from "@angular/router";

@Component({
  selector: 'app-ajouter-film',
  templateUrl: './ajouter-film.component.html',
  styleUrls: ['./ajouter-film.component.scss']
})
export class AjouterFilmComponent implements OnInit {
  id: bigint | undefined = undefined
  categories: Map<bigint, Categorie> = new Map()
  film: Film ={
    titre:"",
    duree: "",
    version: "",
    resume: "",
    categorie: "",
  }

  public set(titre:string, duree:string, version:string, resume:string, categorie:string){
    this.film.titre = titre
    this.film.duree = duree
    this.film.resume = resume
    this.film.version = version
    this.film.categorie = categorie
  }

  update(titre:string, duree:string, version:string, resume:string, categorie:string){
    if(this.id !== undefined){
      this.set(titre,duree,version,resume,categorie)
    }
  }

  create(titre: string, duree: string, categorie:string, version: string, resume:string ): void {
    this.set(titre, duree, version, resume, categorie)
    this.filmService.createFilm(this.film)
  }

  goBack(): void {
    this.location.back()
  }

  constructor(public categorieService: CategorieService, public filmService: FilmService, private route: ActivatedRoute,
              private location: Location){}

  ngOnInit(): void {this.categories = this.categorieService.all()}

  retour() {

  }
}
```
# *dans app/ajouter-film/ajouter-film.components.html* :
```angular2html
<form *ngIf="film!==undefined">
  <label> Titre : </label>
  <input #titre type="text" value="{{film.titre}}">
  <br/>
  <label> Durée : </label>
  <input #duree type="number" value="{{film.duree}}">
  <br/>
  <label>Catégorie :</label>
  <select #categorie value="{{film.categorie}}">
    <option *ngFor="let cat of categories.values()" value="{{cat.nom}}">{{ cat.nom }}</option>
  </select>
  <br/>
  <label>Version :</label>
  <select #version value="{{film.version}}">
    <option value="française">Français</option>
    <option value="originale">Originale</option>
  </select>
  <label> Résumé : </label>
  <textarea #resume>{{film.resume}}</textarea>
  <br/>
  <button *ngIf="id===undefined" (click)="create(titre.value, duree.value, categorie.value, version.value, resume.value)"> Ajouter </button>
  <button *ngIf="id!==undefined" (click)="update(titre.value, duree.value, categorie.value, version.value, resume.value)"> Modifier le film </button>
  <button (click)="retour()"> Annuler </button>
</form>
```
# ======================================================================================================================================================================================================================
# Question n°7 :
# cette implémentation à déjà été faite à la question 6.
# *dans le fichier app/ajouter-film/ajouter-film.components.html* :
```angular2html
<label>Catégorie :</label>
  <select #categorie value="{{film.categorie}}">
    <option *ngFor="let cat of categories.values()" value="{{cat.nom}}">{{ cat.nom }}</option>
  </select>
```
# ======================================================================================================================================================================================================================
# Question n°8 :
# On commence par créer notre api avec symfony : 
```shell
symfony new symfony-api
```
# Puis on rajoute les bundles nécessaires au bon fonctionnement de cette api :
```shell
composer api
composer require symfony/maker-bundle --dev
composer require migrations
composer require --dev orm-fixtures
composer require fakerphp/faker --dev
```
# Nous créons ensuite nos entités Film et Catégorie :
```shell
php bin/console make:entity
```
#*on mettra yes pour les inclures dans l'api*
# Nous développons alors les entités pour qu'elles soient similaires aux entités définies en Front-End
# Puis nous développons les fichiers *Repository/FilmRepository.php* et *Repository/CategorieRepository.php* afin de pouvoir gérer plusieurs entités.
# Puis nous créons la database et modifions *.env* afin qu'elle soit en SQLite :
```shell
php bin/console doctrine:database:create
```
# Nous définissons ensuite notre Fixture dans *DataFixtures/AppFixtures* afin d'avoir des données générées par un faker.
# Puis nous faisons la migration :
```shell
php bin/console make:migration
php bin/console doctrine:migrations:migrate
```
# et nous démarrons enfin le serveur :
```shell
symfony serve -d --no-tls
```
# ======================================================================================================================================================================================================================
# Question n°9 :
# génération du service :
```angular2html
ng generate service FilmWebService
```
# puis implémentation du nouveau service :
```typescript
import { Injectable } from '@angular/core';
import { HttpClient } from "@angular/common/http";
import {Observable} from "rxjs";
import { catchError, map, tap } from 'rxjs/operators';
import {apiResponseF, CategorieWithID, FilmWithID} from '../api.interface';
import {Film} from "../entity/Film";
import {Categorie} from "../entity/Categorie";

@Injectable({
  providedIn: 'root'
})
export class FilmWebService {
  private server: string = "http://localhost:8000/api/films";

  constructor(private http: HttpClient) {}

  public all(): Observable<Array<FilmWithID>>{
    return this.http.get<apiResponseF>("http://localhost:8000/api/films?page=1",
      {observe: 'body', responseType: 'json'})
      .pipe(map((data)=>data['hydra:member']))
  }

  public FilmFromId(id: number): Observable<FilmWithID>{
    return this.http.get<FilmWithID>(this.server+"/"+id.toString(),
      {observe: 'body', responseType: 'json'})
  }

  public deleteFilmFromId(id:number): Observable<boolean>{
    return this.http.delete(this.server+"/"+id.toString(),
      {observe: 'response', responseType: 'json'})
      .pipe(map((response)=>response.status===204))
  }

  public createFilm(f: Film): Observable<boolean>{
    return this.http.post(this.server,f,
      {observe: 'response', responseType: 'json'})
      .pipe(map((response)=>response.status===201))
  }

  public modifyFilm(f: FilmWithID): Observable<boolean>{
    return this.http.put(this.server+"/"+f.id.toString(),f,
      {observe: 'response', responseType: 'json'})
      .pipe(map((response)=>response.status===200))
  }

}
```
# ======================================================================================================================================================================================================================
# Question n°10 :
# Pour que les composants prennent en compte le nouveau service, il faut modifier leur code métier comme ceci :
# *pour le composant film*
```typescript
import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { Location } from '@angular/common';
import {Categorie} from "../entity/Categorie";
import {CategorieService} from "../services/categorie.service";
import {CategorieWithID} from "../api.interface";
import {FilmWebService} from "../services/film-web-service.service";
import {Film} from "../entity/Film";
import {FilmWithID} from "../api.interface";

@Component({
  selector: 'app-film',
  templateUrl: './film.component.html',
  styleUrls: ['./film.component.scss']
})
export class FilmComponent implements OnInit {
  categories: CategorieWithID | undefined = undefined
  film: FilmWithID | undefined = undefined

  constructor(public categorieService: CategorieService, public FilmWebService: FilmWebService, private route: ActivatedRoute,
  private location: Location){}

  ngOnInit(): void {
    const idParameter: string | null = this.route.snapshot.paramMap.get('id')
    if (idParameter !== null) {
      let id = Number(idParameter)
      this.categorieService.CategorieFromId(id)
        .subscribe((cat) => this.categories = cat)
      this.FilmWebService.FilmFromId(id)
        .subscribe((f) => this.film = f)
    }
  }

}
```
# *pour le composant afficher_film*
# On a aussi choici pour ce composant de le fusionner avec supprimer_film, afin de rendre plus pratique l'utilisation de l'id qui est par définition privé
# mais qui est nécessaire afin de supprimer un film (comme on récupère déjà tous les films ici dans le but de les afficher, il suffisait juste de rajouter
# un bouton faisant appel à la fonction supprimer, à laquelle nous donnons l'id de chaque film).
```typescript
import { Component, OnInit } from '@angular/core';
import {FilmWebService} from "../services/film-web-service.service";
import {Film} from "../entity/Film";
import {FilmWithID} from "../api.interface";
import {ActivatedRoute} from "@angular/router";
import {Location} from "@angular/common";
import {Observable} from "rxjs";

@Component({
  selector: 'app-afficher-films',
  templateUrl: './afficher-films.component.html',
  styleUrls: ['./afficher-films.component.scss']
})
export class AfficherFilmsComponent implements OnInit {
  film: Array<FilmWithID>
  ready: boolean
  response: Observable<Array<FilmWithID>> | undefined

  constructor(public filmService: FilmWebService, private route: ActivatedRoute,  private location: Location) {
    this.film=[];
    this.ready = false;
  }

  public afficher():void{
    this.response = this.filmService.all()
  }

  goBack(): void {
    this.location.back()
  }

  delete(id: number) {
      this.filmService.deleteFilmFromId(id)
        .subscribe((r)=>this.goBack())
  }

  ngOnInit(): void {
    this.filmService.all()
      .subscribe({
        next: (films) => (this.film = films, this.ready = true),
        error: (error) => console.log(error)
      })
  }

}
```
#Enfin, pour *ajouter-film* :
```typescript
import { Component, OnInit } from '@angular/core';
import {Film} from "../entity/Film";
import {Categorie} from "../entity/Categorie";
import {CategorieService} from "../services/categorie.service";
import { Location } from '@angular/common';
import {FilmWebService} from "../services/film-web-service.service";
import {ActivatedRoute} from "@angular/router";
import {CategorieWithID, FilmWithID} from "../api.interface";

@Component({
  selector: 'app-ajouter-film',
  templateUrl: './ajouter-film.component.html',
  styleUrls: ['./ajouter-film.component.scss']
})
export class AjouterFilmComponent implements OnInit {
  id: number | undefined = undefined
  categories: Array<CategorieWithID>
  ready: boolean
  film: Film ={
    titre:"",
    duree: 0,
    version: "",
    resume: "",
    categorie: "",
  }

  get newFilm(): boolean { return this.id===undefined }

  public set(titre:string, duree:number, version:string, resume:string, categorie:string): void{
    this.film.titre = titre
    this.film.duree = duree
    this.film.resume = resume
    this.film.version = version
    this.film.categorie = categorie
  }

  update(titre:string, duree:number, version:string, resume:string, categorie:string): void{
    if(this.id !== undefined){
      this.set(titre,duree,version,resume,categorie)
      let film : FilmWithID = {
        id: this.id,
        titre: this.film.titre,
        version: this.film.version,
        resume: this.film.resume,
        categorie: this.film.categorie,
        duree: this.film.duree,
      }
      this.filmService.modifyFilm(film)
        .subscribe((r)=>this.goBack())
    }
  }

  create(titre: string, duree: number, categorie:string, version: string, resume:string ): void {
    this.set(titre, duree, version, resume, categorie)
    this.filmService.createFilm(this.film)
      .subscribe((r)=>this.goBack())
  }

  goBack(): void {
    this.location.back()
  }

  constructor(public categorieService: CategorieService, public filmService: FilmWebService, private route: ActivatedRoute,
              private location: Location){
    this.categories = []
    this.ready = false
  }

  ngOnInit(): void {
    const idParameter: string | null = this.route.snapshot.paramMap.get('id')
    if (idParameter !== null) {
      this.id = Number(idParameter)
      this.filmService.FilmFromId(this.id)
        .subscribe((f)=>this.film=f)
    }
    this.categorieService.all()
      .subscribe({
        next: (cats) => (this.categories = cats, this.ready = true),
        error: (error) => console.log(error)
      })
  }
}
```
# On modifie ensuite les html des composants afin de régler les quelques soucis de variables.
# ======================================================================================================================================================================================================================
