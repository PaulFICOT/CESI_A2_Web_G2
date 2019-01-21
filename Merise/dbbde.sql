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
        Approval          Bool NOT NULL ,
        Date_event        Date NOT NULL ,
        Id_user           Int NOT NULL
	,CONSTRAINT Events_PK PRIMARY KEY (Id_event)

	,CONSTRAINT Events_Users_FK FOREIGN KEY (Id_user) REFERENCES Users(Id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Photos
#------------------------------------------------------------

CREATE TABLE Photos(
        Id_photo   Int  Auto_increment  NOT NULL ,
        Photo_name Varchar (255) ,
        Id_event   Int NOT NULL
	,CONSTRAINT Photos_PK PRIMARY KEY (Id_photo)

	,CONSTRAINT Photos_Events_FK FOREIGN KEY (Id_event) REFERENCES Events(Id_event)
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
        Id_photo   Int NOT NULL
	,CONSTRAINT Comments_PK PRIMARY KEY (Id_comment)

	,CONSTRAINT Comments_Photos_FK FOREIGN KEY (Id_photo) REFERENCES Photos(Id_photo)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Ideabox
#------------------------------------------------------------

CREATE TABLE Ideabox(
        Id_idea          Int  Auto_increment  NOT NULL ,
        Title_idea       Varchar (255) NOT NULL ,
        Description_idea Varchar (255) ,
        Approval         Bool NOT NULL ,
        Id_user          Int NOT NULL
	,CONSTRAINT Ideabox_PK PRIMARY KEY (Id_idea)

	,CONSTRAINT Ideabox_Users_FK FOREIGN KEY (Id_user) REFERENCES Users(Id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Likes
#------------------------------------------------------------

CREATE TABLE Likes(
        Id_like  Int  Auto_increment  NOT NULL ,
        Nbr_like Int ,
        Id_user  Int NOT NULL
	,CONSTRAINT Likes_PK PRIMARY KEY (Id_like)

	,CONSTRAINT Likes_Users_FK FOREIGN KEY (Id_user) REFERENCES Users(Id_user)
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

