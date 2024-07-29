from icecream import ic
from enum import Enum, auto

"""
	logica de recuperatorio: se toman 4 temas y si o si tienen que estar bien los 4 temas
"""


"""
	
"""


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
		self.temas_aprobados = [temadeparcial for temadeparcial in self.temas_notas if temadeparcial.aprobado]
		self.temas_desaprobados = [temadeparcial for temadeparcial in self.temas_notas if temadeparcial.desaprobado]
		self.nota = (len(self.temas_aprobados) / len(self.temas_notas)) * (10)

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
		self.temas_aprobados = sorted(self.parcial1.temas_aprobados + self.parcial2.temas_aprobados)
		self.temas_desaprobados = sorted(self.parcial1.temas_desaprobados + self.parcial2.temas_desaprobados)
		# ic(
			# [ tema for tema in self.temas_aprobados if tema.nota.value < NotaEnLetra.B.value ]
		# )
		# self.promociona = len(self.temas_desaprobados) == 0 and not any([tema for tema in self.temas_aprobados if tema.nota.value < NotaEnLetra.B.value])
		self.promociona = not bool([ tema for tema in self.temas_aprobados if tema.nota.value < NotaEnLetra.B.value ])
		# self.promociona = False
		
		
	@property
	def temas_de_final(self):
		if self._temas_de_final is None:
			if self.promociona:
				self._temas_de_final = "Promociona"
			elif self.recursa:
				self._temas_de_final = "Recursa"
			elif self.temas_desaprobados and self.promedio >= 8:
				self._temas_de_final = self.temas_desaprobados[0]
			else:
				self._temas_de_final = self.temas_desaprobados
				
			if len(self.temas_desaprobados) > 5:
				self._temas_de_final = self.temas_desaprobados[0:5]
			
		return self._temas_de_final
		
	
	def __str__(self):
		return f"Alumno {self.name}:\n   Parcial 1: {self.parcial1}\n   Parcial 2: {self.parcial2}\n   Promedio: {self.promedio}\n   Temas para el final: {self.temas_de_final}"
	








# //--------------------------------------------------------------------//
# ;;---------------------------ok. iniciar-----------------------;;
# //--------------------------------------------------------------------//

if __name__ == "__main__":
	parcial1 = Parcial(
			temario="Algoritmos 1", 
			temas_notas = [
				TemaDeParcial("tema1", NotaEnLetra.D),
				TemaDeParcial("tema2", NotaEnLetra.A),
				TemaDeParcial("tema3", NotaEnLetra.A),
				TemaDeParcial("tema4", NotaEnLetra.A),
				TemaDeParcial("tema5", NotaEnLetra.A),
				TemaDeParcial("tema6", NotaEnLetra.A),
				TemaDeParcial("tema7", NotaEnLetra.A),
				TemaDeParcial("tema8", NotaEnLetra.A),
			]
	)
	parcial2 = Parcial(
			temario="Algoritmos 2", 
			temas_notas={
				TemaDeParcial("tema1", NotaEnLetra.D),
				TemaDeParcial("tema2", NotaEnLetra.D),
				TemaDeParcial("tema3", NotaEnLetra.D),
				TemaDeParcial("tema4", NotaEnLetra.B),
				TemaDeParcial("tema5", NotaEnLetra.A),
				TemaDeParcial("tema6", NotaEnLetra.B),
				TemaDeParcial("tema7", NotaEnLetra.A),
				TemaDeParcial("tema8", NotaEnLetra.C),
			}
	)
	alex = Alumno("Ayelen", parcial1, parcial2)
	print(alex)
	ic(alex.promociona)