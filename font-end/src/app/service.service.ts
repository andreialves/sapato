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
    return this.http.get<any>([url, "login", e, s].join('/'));
  }

  cadastro (nome: string, cpf: string, genero: string, email: string,
            senha: string, rua: string, cidade: string, cep: string, uf: string, numero: string,
            bairro: string, complemento: string, celular: string, telefone: string
           ): Observable<any>{

    return this.http.get<any>([url, "cadastro", nome, cpf, genero, email,
                              senha, rua, cidade, cep, uf, numero,
                              bairro, complemento, celular, telefone].join('/'));
  }
}
