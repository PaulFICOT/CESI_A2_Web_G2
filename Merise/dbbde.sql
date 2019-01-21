#------------------------------------------------------------
#        Script MySQL
#------------------------------------------------------------

#--------------------------------------------------------------------------------------------------
# Database: dbbde
#--------------------------------------------------------------------------------------------------

CREATE DATABASE dbbde;

#------------------------------------------------------------
# Table: Products
#------------------------------------------------------------

CREATE TABLE Products(
        Id_product          Int  Auto_increment  NOT NULL ,
        Name_product        Varchar (50) NOT NULL ,
        Price_product       DECIMAL (15,3)  NOT NULL ,
        Description_product Varchar (255) ,
        Sold_product        Int NOT NULL ,
        Stock_product       Smallint NOT NULL
	,CONSTRAINT Products_PK PRIMARY KEY (Id_product)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Centers
#------------------------------------------------------------

CREATE TABLE Centers(
        Id_center   Int  Auto_increment  NOT NULL ,
        Name_center Varchar (50) NOT NULL
	,CONSTRAINT Centers_PK PRIMARY KEY (Id_center)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Users
#------------------------------------------------------------

CREATE TABLE Users(
        Id_user   Int  Auto_increment  NOT NULL ,
        Firstname Varchar (50) NOT NULL ,
        Lastname  Varchar (50) NOT NULL ,
        Mail      Varchar (50) NOT NULL ,
        Password  Varchar (16) NOT NULL ,
        Status    Varchar (10) NOT NULL ,
        Id_center Int NOT NULL
	,CONSTRAINT Users_PK PRIMARY KEY (Id_user)

	,CONSTRAINT Users_Centers_FK FOREIGN KEY (Id_center) REFERENCES Centers(Id_center)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Events
#------------------------------------------------------------

CREATE TABLE Events(
        Id_event          Int  Auto_increment  NOT NULL ,
        Title_event       Varchar (255) NOT NULL ,
        Description_event Varchar (255) NOT NULL ,
        Comment_event     Varchar (255) ,
        Approval_event    Bool NOT NULL ,
        Date_event        Date NOT NULL ,
        Recurrent         Bool NOT NULL ,
        Price_event       DECIMAL (15,3)  NOT NULL ,
        Voted_event       Bool NOT NULL ,
        Id_user           Int NOT NULL ,
        Id_user_Users     Int NOT NULL
	,CONSTRAINT Events_PK PRIMARY KEY (Id_event)

	,CONSTRAINT Events_Users_FK FOREIGN KEY (Id_user) REFERENCES Users(Id_user)
	,CONSTRAINT Events_Users0_FK FOREIGN KEY (Id_user_Users) REFERENCES Users(Id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Photos
#------------------------------------------------------------

CREATE TABLE Photos(
        Id_photo   Int  Auto_increment  NOT NULL ,
        Photo_name Varchar (255) ,
        Is_public  Bool NOT NULL ,
        Id_user    Int ,
        Id_event   Int NOT NULL
	,CONSTRAINT Photos_PK PRIMARY KEY (Id_photo)

	,CONSTRAINT Photos_Users_FK FOREIGN KEY (Id_user) REFERENCES Users(Id_user)
	,CONSTRAINT Photos_Events0_FK FOREIGN KEY (Id_event) REFERENCES Events(Id_event)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Orders
#------------------------------------------------------------

CREATE TABLE Orders(
        Id_order    Int  Auto_increment  NOT NULL ,
        Date_order  Date NOT NULL ,
        Price_order DECIMAL (15,3)  NOT NULL ,
        Amount      Smallint NOT NULL ,
        Id_user     Int NOT NULL
	,CONSTRAINT Orders_PK PRIMARY KEY (Id_order)

	,CONSTRAINT Orders_Users_FK FOREIGN KEY (Id_user) REFERENCES Users(Id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Comments
#------------------------------------------------------------

CREATE TABLE Comments(
        Id_comment Int  Auto_increment  NOT NULL ,
        Comment    Varchar (255) ,
        Id_photo   Int NOT NULL ,
        Id_user    Int NOT NULL
	,CONSTRAINT Comments_PK PRIMARY KEY (Id_comment)

	,CONSTRAINT Comments_Photos_FK FOREIGN KEY (Id_photo) REFERENCES Photos(Id_photo)
	,CONSTRAINT Comments_Users0_FK FOREIGN KEY (Id_user) REFERENCES Users(Id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Contains
#------------------------------------------------------------

CREATE TABLE Contains(
        Id_order   Int NOT NULL ,
        Id_product Int NOT NULL
	,CONSTRAINT Contains_PK PRIMARY KEY (Id_order,Id_product)

	,CONSTRAINT Contains_Orders_FK FOREIGN KEY (Id_order) REFERENCES Orders(Id_order)
	,CONSTRAINT Contains_Products0_FK FOREIGN KEY (Id_product) REFERENCES Products(Id_product)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Sign_in
#------------------------------------------------------------

CREATE TABLE Sign_in(
        Id_event Int NOT NULL ,
        Id_user  Int NOT NULL
	,CONSTRAINT Sign_in_PK PRIMARY KEY (Id_event,Id_user)

	,CONSTRAINT Sign_in_Events_FK FOREIGN KEY (Id_event) REFERENCES Events(Id_event)
	,CONSTRAINT Sign_in_Users0_FK FOREIGN KEY (Id_user) REFERENCES Users(Id_user)
)ENGINE=InnoDB;