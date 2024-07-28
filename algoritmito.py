from icecream import ic
from enum import Enum, auto

class Banana:
	calorias = 45345


"""
igual o mayor a 4 final. no hay promocion.


si la nota del promedio de los dos parciales es mayor 8:
	parcial = 1 tema.

-si la nota del promedio 
ajhkajakjhfadiufhakjfh

dos parciales
	un parcial tiene 8 temas
		cada tema 4 notas (a,b,c,d)

final 5 temas
alumnos 100
"""
	
# //-----------------------------------------------------------------------//
# ;;----------------------ok. classes.--------------------------;;
# //-----------------------------------------------------------------------//
	
class NotaEnLetra(Enum):
	A = 9 
	B = 7
	C = 5
	D = 3
	E = 1

class TemaDeParcial:
	def __init__(self, name, nota):
		self.name = name
		self.nota = nota
		self.aprobado = nota.value > NotaEnLetra.D.value
		self.desaprobado = not self.aprobado
	
	def __repr__(self):
		return f"|{self.name}|Nota:{self.nota}|"
		
	def __lt__(self, other):
		return self.nota.value < other.nota.value

	
class Parcial:
	def __init__(self, temario, temas_notas):
		self.temario = temario
		self.temas_notas = temas_notas
		self.temas_aprobados = [temanota for temanota in self.temas_notas if temanota.aprobado]
		self.temas_desaprobados = [temanota for temanota in self.temas_notas if temanota.desaprobado]
		self.nota = (len(self.temas_aprobados) / len(self.temas_notas)) * 9 + 1

	def __str__(self):
		return f"Parcial de {self.temario}\n\tTemas aprobados: {len(self.temas_aprobados)}\n\tTemas desaprobados: {len(self.temas_desaprobados)}\n\tContenidos desaprobados: {self.temas_desaprobados}\n\tNota: {self.nota} "
class Alumno:
	_temas_de_final = None
	def __init__(self, name, parcial1, parcial2):
		self.name = name
		self.parcial1 = parcial1
		self.parcial2 = parcial2
		self.promedio = (self.parcial1.nota + self.parcial2.nota)/2
		self.recursa = self.parcial1.nota < 4 or self.parcial2.nota < 4 
		
	@property
	def temas_de_final(self):
		if self._temas_de_final is None:
			if self.recursa:
				self._temas_de_final = False
			else:
				temas_desaprobados = sorted(self.parcial1.temas_desaprobados + self.parcial2.temas_desaprobados)
				if self.promedio >= 8:
					self._temas_de_final = temas_desaprobados[0]
				else:
					self._temas_de_final = temas_desaprobados
					
				if len(temas_desaprobados) > 5:
					self._temas_de_final = temas_desaprobados[0:5]
			
		return self._temas_de_final
		
	
	def __str__(self):
		return f"Alumno {self.name}:\n   Parcial 1: {self.parcial1}\n   Parcial 2: {self.parcial2}\n   Promedio: {self.promedio}\n   Recursa: {self.recursa}\n   Temas para el final: {self.temas_de_final}"
	








# //--------------------------------------------------------------------//
# ;;---------------------------ok. iniciar-----------------------;;
# //--------------------------------------------------------------------//

if __name__ == "__main__":
	parcial1 = Parcial(
			temario="Algoritmos 1", 
			temas_notas = [
				TemaDeParcial("tema1", NotaEnLetra.A),
				TemaDeParcial("tema2", NotaEnLetra.B),
				TemaDeParcial("tema3", NotaEnLetra.C),
				TemaDeParcial("tema4", NotaEnLetra.D),
				TemaDeParcial("tema5", NotaEnLetra.E),
				TemaDeParcial("tema6", NotaEnLetra.A),
				TemaDeParcial("tema7", NotaEnLetra.D),
				TemaDeParcial("tema9", NotaEnLetra.B),
			]
	)
	parcial2 = Parcial(
			temario="Algoritmos 2", 
			temas_notas={
				TemaDeParcial("tema1", NotaEnLetra.A),
				TemaDeParcial("tema2", NotaEnLetra.D),
				TemaDeParcial("tema3", NotaEnLetra.B),
				TemaDeParcial("tema4", NotaEnLetra.E),
				TemaDeParcial("tema5", NotaEnLetra.A),
				TemaDeParcial("tema6", NotaEnLetra.B),
				TemaDeParcial("tema7", NotaEnLetra.D),
				TemaDeParcial("tema8", NotaEnLetra.D),
			}
	)
	alex = Alumno("Alexander", parcial1, parcial2)

	print(alex)

