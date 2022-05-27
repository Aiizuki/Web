import { Injectable } from '@angular/core';
import { HttpClient } from "@angular/common/http";
import {Observable} from "rxjs";
import { catchError, map, tap } from 'rxjs/operators';
import { apiResponse, CategorieWithID } from '../api.interface';
import { Categorie } from "../entity/Categorie";

@Injectable({
  providedIn: 'root'
})
export class CategorieService {

  private server: string = "http://localhost:8000/api/categories";

  constructor(private http: HttpClient) {}

  public all(): Observable<Array<CategorieWithID>>{
    return this.http.get<apiResponse>("http://localhost:8000/api/categories?page=1",
      {observe: 'body', responseType: 'json'})
      .pipe(map((data)=>data['hydra:member']))
  }

  public CategorieFromId(id: number): Observable<CategorieWithID>{
    return this.http.get<CategorieWithID>(this.server+"/"+id.toString(),
      {observe: 'body', responseType: 'json'})
  }

  public deleteCategorieFromId(id:number): Observable<boolean>{
    return this.http.delete(this.server+"/"+id.toString(),
      {observe: 'response', responseType: 'json'})
      .pipe(map((response)=>response.status===204))
  }

  public createCategorie(cat: Categorie): Observable<boolean>{
    return this.http.post(this.server,cat,
      {observe: 'response', responseType: 'json'})
      .pipe(map((response)=>response.status===201))
  }

  public modifyCategorie(cat: CategorieWithID): Observable<boolean>{
    return this.http.put(this.server+"/"+cat.id.toString(),cat,
      {observe: 'response', responseType: 'json'})
      .pipe(map((response)=>response.status===200))
  }
}
