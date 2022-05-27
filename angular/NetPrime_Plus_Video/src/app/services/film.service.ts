import { Injectable } from '@angular/core';
import {Film} from "../entity/Film";

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

  public FilmFromId(id: bigint): Film | undefined{
    return this.Film.get(id)
  }

  public deleteFilmFromId(id: bigint): boolean{
    return this.Film.delete(id)
  }

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
