import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import {FilmComponent} from "./film/film.component";
import {AccueilComponent} from "./accueil/accueil.component";

const routes: Routes = [
  {path: '', component: AccueilComponent},
  {path: 'film', component: FilmComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }


