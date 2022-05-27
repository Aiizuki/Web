import { ComponentFixture, TestBed } from '@angular/core/testing';

import { AfficherFilmsComponent } from './afficher-films.component';

describe('AfficherFilmsComponent', () => {
  let component: AfficherFilmsComponent;
  let fixture: ComponentFixture<AfficherFilmsComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ AfficherFilmsComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(AfficherFilmsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
