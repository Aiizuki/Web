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
