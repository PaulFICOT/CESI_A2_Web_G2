#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Centers
#------------------------------------------------------------

CREATE TABLE Centers(
        Id_center   Int  Auto_increment  NOT NULL ,
        Center_name Varchar (50) NOT NULL
	,CONSTRAINT Centers_PK PRIMARY KEY (Id_center)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Users
#------------------------------------------------------------

CREATE TABLE Users(
        Id_user        Int  Auto_increment  NOT NULL ,
        User_firstname Varchar (50) NOT NULL ,
        User_lastname  Varchar (50) NOT NULL ,
        User_mail      Varchar (50) NOT NULL ,
        User_password  Varchar (20) NOT NULL ,
        User_status    Varchar (10) NOT NULL ,
        Id_center      Int NOT NULL
	,CONSTRAINT Users_PK PRIMARY KEY (Id_user)

	,CONSTRAINT Users_Centers_FK FOREIGN KEY (Id_center) REFERENCES Centers(Id_center)
)
ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Events
#------------------------------------------------------------

CREATE TABLE Events(
        Id_event          Int  Auto_increment  NOT NULL ,
        Event_title       Varchar (255) NOT NULL ,
        Event_description Varchar (255) NOT NULL ,
        Event_comment     Varchar (255) ,
        Event_approval    Bool NOT NULL ,
        Event_date        Date NOT NULL ,
        Event_recurrence  Bool NOT NULL ,
        Event_price       DECIMAL (15,3)  NOT NULL ,
        Event_voted       Bool NOT NULL ,
        Event_period      Varchar (63) ,
        Id_user           Int NOT NULL ,
        Id_user_Users     Int NOT NULL
	,CONSTRAINT Events_PK PRIMARY KEY (Id_event)

	,CONSTRAINT Events_Users_FK FOREIGN KEY (Id_user) REFERENCES Users(Id_user)
	,CONSTRAINT Events_Users0_FK FOREIGN KEY (Id_user_Users) REFERENCES Users(Id_user)
)
ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Photos
#------------------------------------------------------------

CREATE TABLE Photos(
        Id_photo        Int  Auto_increment  NOT NULL ,
        Photo_name      Varchar (255) ,
        Photo_is_public Bool NOT NULL ,
        Id_event        Int NOT NULL
	,CONSTRAINT Photos_PK PRIMARY KEY (Id_photo)

	,CONSTRAINT Photos_Events_FK FOREIGN KEY (Id_event) REFERENCES Events(Id_event)
)
ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Orders
#------------------------------------------------------------

CREATE TABLE Orders(
        Id_order     Int  Auto_increment  NOT NULL ,
        Order_date   Date NOT NULL ,
        Order_price  DECIMAL (15,3)  NOT NULL ,
        Order_Amount Int NOT NULL ,
        Id_user      Int NOT NULL
	,CONSTRAINT Orders_PK PRIMARY KEY (Id_order)

	,CONSTRAINT Orders_Users_FK FOREIGN KEY (Id_user) REFERENCES Users(Id_user)
)
ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Category
#------------------------------------------------------------

CREATE TABLE Category(
        Id_category   Int  Auto_increment  NOT NULL ,
        Category_type Varchar (63) NOT NULL
	,CONSTRAINT Category_PK PRIMARY KEY (Id_category)
)
ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Products
#------------------------------------------------------------

CREATE TABLE Products(
        Id_product          Int  Auto_increment  NOT NULL ,
        Product_name        Varchar (50) NOT NULL ,
        Product_price       DECIMAL (15,3)  NOT NULL ,
        Product_description Varchar (255) ,
        Product_nbr_sold    Int NOT NULL ,
        Product_stock       Int NOT NULL ,
        Product_path_image  Varchar (255) NOT NULL ,
        Id_category         Int NOT NULL
	,CONSTRAINT Products_PK PRIMARY KEY (Id_product)

	,CONSTRAINT Products_Category_FK FOREIGN KEY (Id_category) REFERENCES Category(Id_category)
)
ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Contains
#------------------------------------------------------------

CREATE TABLE Contains(
        Id_order   Int NOT NULL ,
        Id_product Int NOT NULL
	,CONSTRAINT Contains_PK PRIMARY KEY (Id_order,Id_product)

	,CONSTRAINT Contains_Orders_FK FOREIGN KEY (Id_order) REFERENCES Orders(Id_order)
	,CONSTRAINT Contains_Products0_FK FOREIGN KEY (Id_product) REFERENCES Products(Id_product)
)
ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Comment
#------------------------------------------------------------

CREATE TABLE Comment(
        Id_user  Int NOT NULL ,
        Id_photo Int NOT NULL
	,CONSTRAINT Comment_PK PRIMARY KEY (Id_user,Id_photo)

	,CONSTRAINT Comment_Users_FK FOREIGN KEY (Id_user) REFERENCES Users(Id_user)
	,CONSTRAINT Comment_Photos0_FK FOREIGN KEY (Id_photo) REFERENCES Photos(Id_photo)
)
ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Liked
#------------------------------------------------------------

CREATE TABLE Liked(
        Id_photo Int NOT NULL ,
        Id_user  Int NOT NULL
	,CONSTRAINT Liked_PK PRIMARY KEY (Id_photo,Id_user)

	,CONSTRAINT Liked_Photos_FK FOREIGN KEY (Id_photo) REFERENCES Photos(Id_photo)
	,CONSTRAINT Liked_Users0_FK FOREIGN KEY (Id_user) REFERENCES Users(Id_user)
)
ENGINE=InnoDB;	


#------------------------------------------------------------
# Table: Sign_in
#------------------------------------------------------------

CREATE TABLE Sign_in(
        Id_event Int NOT NULL ,
        Id_user  Int NOT NULL
	,CONSTRAINT Sign_in_PK PRIMARY KEY (Id_event,Id_user)

	,CONSTRAINT Sign_in_Event_FK FOREIGN KEY (Id_event) REFERENCES events(Id_event)
	,CONSTRAINT Sign_in_User_FK FOREIGN KEY (Id_user) REFERENCES Users(Id_user)
)
ENGINE=InnoDB;	


#------------------------------------------------------------
# Table: Comment
#------------------------------------------------------------

CREATE TABLE Comment(
        Id_user  Int NOT NULL ,
        Id_photo Int NOT NULL
	,CONSTRAINT Comment_PK PRIMARY KEY (Id_user,Id_photo)

	,CONSTRAINT Comment_Users_FK FOREIGN KEY (Id_user) REFERENCES Users(Id_user)
	,CONSTRAINT Comment_Photos0_FK FOREIGN KEY (Id_photo) REFERENCES Photos(Id_photo)
)
ENGINE=InnoDB;