# -Integration_de_donnees_et_mediation
 Définition et alimentation de trois sources de données (Base de données): 
 ## src :
 S1 : Emp(EmpNo, Name, data_naissance, Email)
 
Department (DeptNo, DeptName, Localisation)

WorksIn (EmpNo*, DeptNo*)

S2 : Employé (NumEmp, NomEmp, NumProjet*)

Projet(NumProjet, NomProjet, Budget, NumDept*)

Departement(NumDept, NomDept)

S3 : 
Base de données du service de paye du groupe (base complète)

Employé (NumEmp, Nom, Mail, DN)

Salaire (NumEmp, Sal, Année)
### The "global as view" approach
