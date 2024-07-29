#include <iostream>
#include <string>
using namespace std;

//--------------------------------------------------------------------//
// ;;---------------------------ok. enums-----------------------;;
//--------------------------------------------------------------------//

enum NotaEnLetra {
    A = 9,
    B = 7,
    C = 5,
    D = 3,
    E = 1
};

//--------------------------------------------------------------------//
// ;;---------------------------ok. classes-----------------------;;
//--------------------------------------------------------------------//

//-------------------------ok.Parcial-----------------------//
class TemaDeParcial {
  public:
    string name;
    NotaEnLetra nota;
    bool aprobado;
    bool desaprobado;
	TemaDeParcial ( string name, NotaEnLetra nota){
		this->name = name;
		this->nota = nota;
		aprobado = this->nota > NotaEnLetra::D;
		desaprobado = !aprobado;
	};
};

//-------------------------ok.Parcial-----------------------//
class Parcial {
  public:
	string temario;
    // TemaDeParcial* temas_notas[8];
	TemaDeParcial* temas_aprobados;
	TemaDeParcial* temas_desaprobados;
	int nota;
	int n_desaprobados;
	int n_aprobados;
	
	Parcial(string temario, TemaDeParcial temas_notas[8]){
		this->temario = temario;
		// this->temas_notas = temas_notas;	// just save locally the direction, no need copy
        // for (int i = 0; i < 8; i++) {
            // this->temas_notas[i] = &temas_notas[i];
        // }
		
        // Separar aprobados y desaprobados counts
		n_desaprobados = 0;
		for ( int i = 0; i < 8; i++ ) {
			if (temas_notas[i].desaprobado) {
				n_desaprobados++;
			}
		}
		n_aprobados = 8 - n_desaprobados;

		// Allocate arrays based on counts
		temas_desaprobados = new TemaDeParcial[n_desaprobados];
		temas_aprobados = new TemaDeParcial[n_aprobados];


        // Llenar los arrays respectivamente		
        int desaprobados_index = 0;
        int aprobados_index = 0;
        for (int i = 0; i < 8; i++) {
            if (temas_notas[i].desaprobado) {
                temas_desaprobados[desaprobados_index++] = temas_notas[i];
            } else {
                temas_aprobados[aprobados_index++] = temas_notas[i];
            }
        }
		
		// figure out nota
		// nota = (n_aprobados / n_desaprobados) * 10;
		nota = (n_aprobados > 0) ? (10 * n_aprobados / 8) : 0;
	}

	~Parcial() {
		delete[] temas_desaprobados;
		delete[] temas_aprobados;
	}
};

//-------------------------ok.Parcial-----------------------//
class Alumno {
	string name;
	Parcial* parcial1;
	Parcial* parcial2;
	float promedio;
	bool recursa;
	bool promociona;
	int n_desaprobados;
	int n_aprobados;
	TemaDeParcial* temas_desaprobados;
	TemaDeParcial* temas_aprobados;
	TemaDeParcial** temas_de_final; // Array of pointers to TemaDeParcial
	
  public:
	Alumno( string name, Parcial* parcial1, Parcial* parcial2 )
		: (name(name), parcial1(parcial1), parcial2(parcial2)) {
			
		// sacar el promedio de parciales
		promedio = (parcial1->nota + parcial2->nota) / 2.0;
		recursa = (parcial1->nota < 4) || (parcial2->nota < 4);
		
		// separar aprobados y desaprobados counts
		n_desaprobados = parcial1->n_desaprobados + parcial2->n_desaprobados;
		n_aprobados = parcial1->n_aprobados + parcial2->n_aprobados;
		
		// Allocate arrays based on counts
		temas_desaprobados = new TemaDeParcial[n_desaprobados];
		temas_aprobados = new TemaDeParcial[n_aprobados];

		// Llenar my temas_desaprobados array
		for (int i = 0; ; i < parcial1->n_desaprobados; i++ ) {
			this->temas_desaprobados[i] = parcial1->temas_desaprobados[i]
		}
		for (int i = 0; ; i < parcial2->n_desaprobados+i; i++ ) {
			this->temas_desaprobados[i+parcial1->n_desaprobados] = parcial2->temas_desaprobados[i]
		}
		
		// Llenar my temas_aprobados array
		for (int i = 0; ; i < parcial1->n_desaprobados; i++ ) {
			this->temas_aprobados[i] = parcial1->temas_aprobados[i]
		}
		for (int i = 0; ; i < parcial2->n_desaprobados+i; i++ ) {
			this->temas_aprobados[i+parcial1->n_desaprobados] = parcial2->temas_aprobados[i]
		}
		
		// averiguar si promociona
		promociona = true;
		for ( int i = 0; i < n_aprobados; i++ ) {
			if (temas_aprobados[i].nota < NotaEnLetra::B){
				promociona = false;
				break;
			}
		}
		
		
		
		// averiguar la cantidad de temas para el final
		if (promociona || recursa) {
			n_temas_de_final = 0;
		}
		else if (n_desaprobados && promedio >= 8){
			n_temas_de_final = 1;
		} 
		else if (n_desaprobados > 5) {
			n_temas_de_final = 5;
		}
		else {
			n_temas_de_final = n_desaprobados;
		}
		

        // Allocate and fill temas_de_final
        temas_de_final = new TemaDeParcial*[n_temas_de_final];
        if (n_temas_de_final > 0) {
            if (n_desaprobados > 0 && promedio >= 8) {
                temas_de_final[0] = &temas_desaprobados[0];
            } else {
                for (int i = 0; i < n_temas_de_final; i++) {
                    temas_de_final[i] = &temas_desaprobados[i];
                }
            }
        }
	}
	~Alumno() {
		// Clean up dynamically allocated memory
		delete[] temas_desaprobados;
		delete[] temas_aprobados;
		delete[] temas_de_final;
	}
	
	void print() {
		cout << "[Alumno " << name << "]" << endl;
		cout << "Promedio: " << promedio << endl;
		cout << "Recursa: " << (recursa ? "Si" : "No") << endl;
		cout << "Promociona: " << (promociona ? "Si" : "No") << endl;
		cout << "Numero de desaprobados: " << n_desaprobados << endl;
		cout << "Numero de aprobados: " << n_aprobados << endl;

		cout << "Temas desaprobados:" << endl;
		for (int i = 0; i < n_desaprobados; i++) {
			cout << temas_desaprobados[i].tema << " - Nota: " << temas_desaprobados[i].nota << endl;
		}

		cout << "Temas aprobados:" << endl;
		for (int i = 0; i < n_aprobados; i++) {
			cout << temas_aprobados[i].tema << " - Nota: " << temas_aprobados[i].nota << endl;
		}

		cout << "Temas para el final:" << endl;
		for (int i = 0; temas_de_final != nullptr && temas_de_final[i] != nullptr; i++) {
			cout << temas_de_final[i]->tema << " - Nota: " << temas_de_final[i]->nota << endl;
		}
	}
};





//--------------------------------------------------------------------//
// ;;---------------------------ok. iniciar-----------------------;;
//--------------------------------------------------------------------//

int main() {
	// primer parcial: 8 temas
	TemaDeParcial parcial1_temas[8] = {
		TemaDeParcial("tema1", NotaEnLetra::D),
		TemaDeParcial("tema2", NotaEnLetra::A),
		TemaDeParcial("tema3", NotaEnLetra::A),
		TemaDeParcial("tema4", NotaEnLetra::A),
		TemaDeParcial("tema5", NotaEnLetra::A),
		TemaDeParcial("tema6", NotaEnLetra::A),
		TemaDeParcial("tema7", NotaEnLetra::A),
		TemaDeParcial("tema8", NotaEnLetra::A)
	};
	Parcial parcial1("Estadistica 1", parcial1_temas);
	
	// segundo parcial: 8 temas
	TemaDeParcial parcial2_temas[8] = {
		TemaDeParcial("tema1", NotaEnLetra::D),
		TemaDeParcial("tema2", NotaEnLetra::A),
		TemaDeParcial("tema3", NotaEnLetra::A),
		TemaDeParcial("tema4", NotaEnLetra::A),
		TemaDeParcial("tema5", NotaEnLetra::A),
		TemaDeParcial("tema6", NotaEnLetra::A),
		TemaDeParcial("tema7", NotaEnLetra::A),
		TemaDeParcial("tema8", NotaEnLetra::A)
	};
	Parcial parcial2("Estadistica 2", parcial2_temas);
	
	
	// instace alumnito
	Alumno alumno1("Alex", &parcial1, &parcial2);
	
	
	// show his stuff thru his method
	alumno1.print();
	
	// Clean up dynamically allocated memory
	for (int i = 0; i < 8; i++) {
		delete parcial1_temas[i];
		delete parcial2_temas[i];
	}
	
	return 0;
}