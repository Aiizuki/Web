import { Injectable } from '@angular/core';
import {HttpClient, HttpParams} from "@angular/common/http";
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
