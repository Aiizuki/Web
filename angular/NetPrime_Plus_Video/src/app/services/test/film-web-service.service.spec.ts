import { TestBed } from '@angular/core/testing';

import { FilmWebService } from '../film-web-service.service';

describe('FilmWebServiceService', () => {
  let service: FilmWebService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(FilmWebService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
