import { Categorie } from "./entity/Categorie";
import {Film} from "./entity/Film";

export interface CategorieWithID extends Categorie{
  "id" : number
}

export interface FilmWithID extends Film{
  "id": number
}

export interface apiResponse {
  "@context" : string,
  "@id" : string,
  "@type" : string,
  "hydra:member": Array<CategorieWithID>
}

export interface apiResponseF {
  "@context" : string,
  "@id" : string,
  "@type" : string,
  "hydra:member": Array<FilmWithID>
}
