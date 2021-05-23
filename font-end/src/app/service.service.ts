import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

const url:string = "http://localhost/~andrei/sapato/back-end/api";

@Injectable({
  providedIn: 'root'
})



export class ServiceService {
  
  email: string = "";
  getEmail(){
    return this.email;
  }

  setEmail(email: string){
    this.email = email;
  }

  constructor(private http: HttpClient) { }

  login (e: string, s: string): Observable<any>{
    const data = {
        email: e,
        senha: s
    }
    return this.http.get<any>([url,"login", e, s].join('/'));
  }
}
