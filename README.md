# -Integration_de_donnees_et_mediation
 
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
### Step One :

 Définition et alimentation de trois sources de données (Base de données):
 NB:
 
 S1-------------->SQLITE
 
 S2-------------->MySql (Desktop app)
 
 S2-------------->MySql (Web app phpMyadmin)
 ### Step Two:
 
Objectif : Interface de connexion à la source globale

Créer une interface de connexion à une source globale G :

G : Employé (NomEmp, Salaire, NumDept)

Département (NumDept, NomDept, Budget)

