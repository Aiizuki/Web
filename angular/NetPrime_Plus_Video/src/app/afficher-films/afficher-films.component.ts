import { Component, OnInit } from '@angular/core';
import {FilmWebService} from "../services/film-web-service.service";
import{CategorieService} from "../services/categorie.service";
import {Film} from "../entity/Film";
import {CategorieWithID, FilmWithID} from "../api.interface";
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
  categories: Array<CategorieWithID>
  ready: boolean
  response: Observable<Array<FilmWithID>> | undefined

  constructor(public filmService: FilmWebService,public categorieService: CategorieService, private route: ActivatedRoute,  private location: Location) {
    this.film=[];
    this.categories = []
    this.ready = false;
  }

  public afficher(value: string):void{
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
    this.categorieService.all()
      .subscribe({
      next: (cats) => (this.categories = cats, this.ready = true),
        error: (error) => console.log(error)
    })

  }

}
