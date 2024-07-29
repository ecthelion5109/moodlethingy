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

    // Default constructor. to instance empty
    // TemaDeParcial() : name(""), nota(E), aprobado(false), desaprobado(true) {}
	// ya no hace flata
	
	TemaDeParcial( string name, NotaEnLetra nota): name(name), nota(nota){
		aprobado = this->nota > NotaEnLetra::D;
		desaprobado = !aprobado;
	} // funciones no llevan ;
};

//-------------------------ok.Parcial-----------------------//
class Parcial {
  public:
	string temario;
	TemaDeParcial** temas_aprobados;
	TemaDeParcial** temas_desaprobados;
	int nota;
	int n_desaprobados;
	int n_aprobados;
	
	Parcial(string temario, TemaDeParcial temasdeparcial[8]): temario(temario){
        // Separar aprobados y desaprobados counts
		n_desaprobados = 0;
		for ( int i = 0; i < 8; i++ ) {
			if (temasdeparcial[i].desaprobado) {
				n_desaprobados++;
			}
		}
		n_aprobados = 8 - n_desaprobados;

		// Allocate arrays based on counts
		temas_desaprobados = new TemaDeParcial*[n_desaprobados];
		temas_aprobados = new TemaDeParcial*[n_aprobados];


        // Llenar los arrays respectivamente		
        int desaprobados_index = 0;
        int aprobados_index = 0;
        for (int i = 0; i < 8; i++) {
            if (temasdeparcial[i].desaprobado) {
                temas_desaprobados[desaprobados_index++] = &temasdeparcial[i];
            } else {
                temas_aprobados[aprobados_index++] = &temasdeparcial[i];
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
	TemaDeParcial** temas_desaprobados;
	TemaDeParcial** temas_aprobados;
	TemaDeParcial** temas_de_final; // Array of pointers to TemaDeParcial
    int n_temas_de_final;

	
  public:	// la lista de memeber instanciation no lleva parentesis
	Alumno(string name, Parcial* parcial1, Parcial* parcial2): 
		name(name), parcial1(parcial1), parcial2(parcial2) {
		// sacar el promedio de parciales
		promedio = (parcial1->nota + parcial2->nota) / 2.0;
		recursa = (parcial1->nota < 4) || (parcial2->nota < 4);
		
		// separar aprobados y desaprobados counts
		n_desaprobados = parcial1->n_desaprobados + parcial2->n_desaprobados;
		n_aprobados = parcial1->n_aprobados + parcial2->n_aprobados;
		
		// Allocate arrays based on counts
		temas_desaprobados = new TemaDeParcial*[n_desaprobados];
		temas_aprobados = new TemaDeParcial*[n_aprobados];

		// Llenar my temas_desaprobados array
		for (int i = 0; i < parcial1->n_desaprobados; i++ ) {
			temas_desaprobados[i] = parcial1->temas_desaprobados[i];
		}
		for (int i = 0; i < parcial2->n_desaprobados; i++ ) {
			temas_desaprobados[i+parcial1->n_desaprobados] = parcial2->temas_desaprobados[i];
		}
		
		// Llenar my temas_aprobados array
		for (int i = 0; i < parcial1->n_aprobados; i++ ) {
			temas_aprobados[i] = parcial1->temas_aprobados[i];
		}
		for (int i = 0; i < parcial2->n_aprobados; i++ ) {
			temas_aprobados[i+parcial1->n_aprobados] = parcial2->temas_aprobados[i];
		}
		
		// averiguar si promociona
		promociona = true;
		for ( int i = 0; i < n_aprobados; i++ ) {
			if (temas_aprobados[i]->nota < NotaEnLetra::B){
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
                temas_de_final[0] = temas_desaprobados[0];
            } else {
                for (int i = 0; i < n_temas_de_final; i++) {
                    temas_de_final[i] = temas_desaprobados[i];
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
		cout << "\t" << "Promedio: " << promedio << endl;
		cout << "\t" << "Recursa: " << (recursa ? "Si" : "No") << endl;
		cout << "\t" << "Promociona: " << (promociona ? "Si" : "No") << endl;
		cout << "\t" << "Numero de desaprobados: " << n_desaprobados << endl;
		cout << "\t" << "Numero de aprobados: " << n_aprobados << endl;

		cout << "\t" << "Temas desaprobados:" << endl;
		for (int i = 0; i < n_desaprobados; i++) {
			cout << "\t" << "\t" << temas_desaprobados[i]->name << " - Nota: " << temas_desaprobados[i]->nota << endl;
		}
	
		cout << "\t" << "Temas para el final:" << endl;
		if (n_temas_de_final){
			for (int i = 0; i < n_temas_de_final; i++) {
				cout << "\t" << "\t" << temas_de_final[i]->name << " - Nota: " << temas_de_final[i]->nota << endl;
			}
		} else {
			cout << "\t" << "\t" << "Ninguno";
		}
	}
};





//--------------------------------------------------------------------//
// ;;---------------------------ok. iniciar-----------------------;;
//--------------------------------------------------------------------//

int main() {
	// primer parcial: 8 temas
	TemaDeParcial temasdeparcial1[8] = {
		TemaDeParcial("tema1", NotaEnLetra::D),
		TemaDeParcial("tema2", NotaEnLetra::A),
		TemaDeParcial("tema3", NotaEnLetra::A),
		TemaDeParcial("tema4", NotaEnLetra::A),
		TemaDeParcial("tema5", NotaEnLetra::C),
		TemaDeParcial("tema6", NotaEnLetra::C),
		TemaDeParcial("tema7", NotaEnLetra::B),
		TemaDeParcial("tema8", NotaEnLetra::D)
	};
	Parcial parcial1("Estadistica 1", temasdeparcial1);
	
	// segundo parcial: 8 temas
	TemaDeParcial temasdeparcial2[8] = {
		TemaDeParcial("tema1", NotaEnLetra::D),
		TemaDeParcial("tema2", NotaEnLetra::A),
		TemaDeParcial("tema3", NotaEnLetra::A),
		TemaDeParcial("tema4", NotaEnLetra::C),
		TemaDeParcial("tema5", NotaEnLetra::A),
		TemaDeParcial("tema6", NotaEnLetra::A),
		TemaDeParcial("tema7", NotaEnLetra::A),
		TemaDeParcial("tema8", NotaEnLetra::A)
	};
	Parcial parcial2("Estadistica 2", temasdeparcial2);
	
	// instace alumnito
	Alumno alumno1("Alex", &parcial1, &parcial2);
	
	// show his stuff thru his method
	alumno1.print();
	
	// wait
	cout << endl;
	system("Pause");
	
	return 0;
}