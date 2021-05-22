import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

const url:string = "http://localhost/";

@Injectable({
  providedIn: 'root'
})

export class ServiceService {
  
  constructor(private http: HttpClient) { }
}
