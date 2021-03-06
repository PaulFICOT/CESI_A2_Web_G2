#------------------------------------------------------------
#        Script MySQL G2 FICOT SAUVAGE LAMBEC DESRAMAUT
#------------------------------------------------------------

#--------------------------------------------------------------------------------------------------
# Database: dbbde
#--------------------------------------------------------------------------------------------------

CREATE DATABASE dbbde;


#------------------------------------------------------------
# Table: Centers
#------------------------------------------------------------

CREATE TABLE Centers(
        Id_center   INT  Auto_increment  NOT NULL ,
        Center_name VARCHAR (50) NOT NULL
	,CONSTRAINT Centers_PK PRIMARY KEY (Id_center)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Users
#------------------------------------------------------------

CREATE TABLE Users(
        Id_user        INT  Auto_increment  NOT NULL ,
        User_firstname VARCHAR (50) NOT NULL ,
        User_lastname  VARCHAR (50) NOT NULL ,
        User_mail      VARCHAR (50) NOT NULL ,
        User_password  VARCHAR (20) NOT NULL ,
        User_status    VARCHAR (10) NOT NULL ,
        Id_center      INT NOT NULL
	,CONSTRAINT Users_PK PRIMARY KEY (Id_user)

	,CONSTRAINT Users_Centers_FK FOREIGN KEY (Id_center) REFERENCES Centers(Id_center)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Events
#------------------------------------------------------------

CREATE TABLE Events(
        Id_event          INT  Auto_increment  NOT NULL ,
        Event_title       VARCHAR (255) NOT NULL ,
        Event_description VARCHAR (255) NOT NULL ,
        Event_comment     VARCHAR (255) ,
        Event_approval    BOOL NOT NULL ,
        Event_date        DATE NOT NULL ,
        Event_recurrence  BOOL NOT NULL ,
        Event_price       DECIMAL (15,3)  NOT NULL ,
        Event_voted       BOOL NOT NULL ,
        Event_period      VARCHAR (63) ,
        Id_user           INT NOT NULL ,
        Id_user_Users     INT NOT NULL
	,CONSTRAINT Events_PK PRIMARY KEY (Id_event)

	,CONSTRAINT Events_Users_FK FOREIGN KEY (Id_user) REFERENCES Users(Id_user)
	,CONSTRAINT Events_Users0_FK FOREIGN KEY (Id_user_Users) REFERENCES Users(Id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Photos
#------------------------------------------------------------

CREATE TABLE Photos(
        Id_photo        INT  Auto_increment  NOT NULL ,
        Photo_name      VARCHAR (255) ,
        Photo_is_public BOOL NOT NULL ,
        Id_user         INT ,
        Id_event        INT NOT NULL,
        CONSTRAINT Photos_PK PRIMARY KEY (Id_photo),
        
        CONSTRAINT Photos_Users_FK FOREIGN KEY (Id_user) REFERENCES Users(Id_user),
        CONSTRAINT Photos_Events0_FK FOREIGN KEY (Id_event) REFERENCES Events(Id_event)
)
ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Orders
#------------------------------------------------------------

CREATE TABLE Orders(
        Id_order     INT  Auto_increment  NOT NULL ,
        Order_date   DATE NOT NULL ,
        Order_price  DECIMAL (15,3)  NOT NULL ,
        Order_Amount INT NOT NULL ,
        Id_user      INT NOT NULL,
        CONSTRAINT Orders_PK PRIMARY KEY (Id_order),
        
        CONSTRAINT Orders_Users_FK FOREIGN KEY (Id_user) REFERENCES Users(Id_user)
)
ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Category
#------------------------------------------------------------

CREATE TABLE Category(
        Id_category   INT  Auto_increment  NOT NULL ,
        Category_type VARCHAR (63) NOT NULL,
        CONSTRAINT Category_PK PRIMARY KEY (Id_category)
)
ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Products
#------------------------------------------------------------

CREATE TABLE Products(
        Id_product          INT  Auto_increment  NOT NULL ,
        Product_name        VARCHAR (50) NOT NULL ,
        Product_price       DECIMAL (15,3)  NOT NULL ,
        Product_description VARCHAR (255) ,
        Product_nbr_sold    INT NOT NULL ,
        Product_stock       INT NOT NULL ,
        Product_path_image  VARCHAR (255) NOT NULL ,
        Id_category         INT NOT NULL,
        CONSTRAINT Products_PK PRIMARY KEY (Id_product),
        
        CONSTRAINT Products_Category_FK FOREIGN KEY (Id_category) REFERENCES Category(Id_category)
)
ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Contains
#------------------------------------------------------------

CREATE TABLE Contains(
        Id_order   INT NOT NULL ,
        Id_product INT NOT NULL,
        CONSTRAINT Contains_PK PRIMARY KEY (Id_order,Id_product),
        
        CONSTRAINT Contains_Orders_FK FOREIGN KEY (Id_order) REFERENCES Orders(Id_order),
        CONSTRAINT Contains_Products0_FK FOREIGN KEY (Id_product) REFERENCES Products(Id_product)
)
ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Comment
#------------------------------------------------------------

CREATE TABLE Comment(
        Id_user  INT NOT NULL ,
        Id_photo INT NOT NULL,
        CONSTRAINT Comment_PK PRIMARY KEY (Id_user,Id_photo),
        CONSTRAINT Comment_Users_FK FOREIGN KEY (Id_user) REFERENCES Users(Id_user),
        CONSTRAINT Comment_Photos0_FK FOREIGN KEY (Id_photo) REFERENCES Photos(Id_photo)
)
ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Sign_in
#------------------------------------------------------------

CREATE TABLE Sign_in(
        Id_event INT NOT NULL ,
        Id_user  INT NOT NULL,
        CONSTRAINT Sign_in_PK PRIMARY KEY (Id_event,Id_user),
        
        CONSTRAINT Sign_in_Events_FK FOREIGN KEY (Id_event) REFERENCES Events(Id_event),
        CONSTRAINT Sign_in_Users0_FK FOREIGN KEY (Id_user) REFERENCES Users(Id_user)
)
ENGINE=InnoDB;