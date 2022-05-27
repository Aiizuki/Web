import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { AccueilComponent } from './accueil/accueil.component';
import { FilmComponent } from './film/film.component';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { AfficherFilmsComponent } from './afficher-films/afficher-films.component';
import { AjouterFilmComponent } from './ajouter-film/ajouter-film.component';
import { HttpClientModule } from "@angular/common/http";
import {FormsModule} from "@angular/forms";

@NgModule({
  declarations: [
    AppComponent,
    AccueilComponent,
    FilmComponent,
    AfficherFilmsComponent,
    AjouterFilmComponent,
  ],
  imports: [
    BrowserModule,
    HttpClientModule,
    AppRoutingModule,
    NgbModule,
    FormsModule,
  ],
  providers: [],
  bootstrap: [AppComponent, AccueilComponent, FilmComponent]
})
export class AppModule { }
