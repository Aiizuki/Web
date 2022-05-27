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
