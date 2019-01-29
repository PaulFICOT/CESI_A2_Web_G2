#------------------------------------------------------------
#        Script MySQL.
#						Paul FICOT

#------------------------------------------------------------


#------------------------------------------------------------
# Table: Centers
#------------------------------------------------------------

CREATE TABLE Centers(
        Id_center   INT  Auto_increment  NOT NULL ,
        Center_name VARCHAR (50) NOT NULL,
        
        CONSTRAINT Centers_PK PRIMARY KEY (Id_center)
)
ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Users
#------------------------------------------------------------

CREATE TABLE Users(
        Id_user        INT  Auto_increment  NOT NULL ,
        User_firstname VARCHAR (50)  NOT NULL ,
        User_lastname  VARCHAR (50)  NOT NULL ,
        User_mail      VARCHAR (50)  NOT NULL ,
        User_password  VARCHAR (255) NOT NULL ,
        User_status    VARCHAR (10)  NOT NULL ,
        User_isAdmin   BOOLEAN       NOT NULL,
        Id_center      INT NOT NULL,
        
        CONSTRAINT Users_PK PRIMARY KEY (Id_user),
        
        CONSTRAINT Users_Centers_FK FOREIGN KEY (Id_center) REFERENCES Centers(Id_center)
)
ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Events
#------------------------------------------------------------

CREATE TABLE Events(
        Id_event          INT  Auto_increment  NOT NULL ,
        Event_title       VARCHAR (255) NOT NULL ,
        Event_description VARCHAR (255) NOT NULL ,
        Event_approval    BOOLEAN NOT NULL ,
        Event_date        DATE NOT NULL ,
        Event_recurrence  BOOLEAN NOT NULL ,
        Event_price       DECIMAL (15,3)  NOT NULL ,
        Event_period      VARCHAR (63) ,
        Event_location    VARCHAR (100),
        Id_user           INT NOT NULL ,
        
        CONSTRAINT Events_PK PRIMARY KEY (Id_event),
        
        CONSTRAINT Events_Users_FK FOREIGN KEY (Id_user) REFERENCES Users(Id_user)
)
ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Photos
#------------------------------------------------------------

CREATE TABLE Photos(
        Id_photo        INT  Auto_increment  NOT NULL ,
        Photo_name      VARCHAR (255) ,
        Photo_is_public BOOLEAN NOT NULL ,
        Id_event        INT NOT NULL,
        
        CONSTRAINT Photos_PK PRIMARY KEY (Id_photo),
        
        CONSTRAINT Photos_Events_FK FOREIGN KEY (Id_event) REFERENCES Events(Id_event)
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

CREATE TABLE Categories(
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
        
        CONSTRAINT Products_Category_FK FOREIGN KEY (Id_category) REFERENCES Categories(Id_category)
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
# Table: Comments
#------------------------------------------------------------

CREATE TABLE Comments(
        Id_user  INT NOT NULL ,
        Id_photo INT NOT NULL,
        Comment_content VARCHAR(255) NOT NULL,
        
        CONSTRAINT Comments_PK PRIMARY KEY (Id_user,Id_photo),
        
        CONSTRAINT Comments_Users_FK FOREIGN KEY (Id_user) REFERENCES Users(Id_user),
        CONSTRAINT Comments_Photos0_FK FOREIGN KEY (Id_photo) REFERENCES Photos(Id_photo)
)
ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Liked
#------------------------------------------------------------

CREATE TABLE Likes(
        Id_photo INT NOT NULL ,
        Id_user  INT NOT NULL,
        
        CONSTRAINT Likes_PK PRIMARY KEY (Id_photo,Id_user),
        
        CONSTRAINT Likes_Photos_FK FOREIGN KEY (Id_photo) REFERENCES Photos(Id_photo),
        CONSTRAINT Likes_Users0_FK FOREIGN KEY (Id_user) REFERENCES Users(Id_user)
)
ENGINE=InnoDB;	


#------------------------------------------------------------
# Table: Signs_in
#------------------------------------------------------------

CREATE TABLE Signs_in(
        Id_event INT NOT NULL ,
        Id_user  INT NOT NULL,
        CONSTRAINT Signs_in_PK PRIMARY KEY (Id_event,Id_user),
        
        CONSTRAINT Signs_in_Event_FK FOREIGN KEY (Id_event) REFERENCES events(Id_event),
        CONSTRAINT SignsS_in_User_FK FOREIGN KEY (Id_user) REFERENCES Users(Id_user)
)
ENGINE=InnoDB;	


#------------------------------------------------------------
# Table: Votes
#------------------------------------------------------------

CREATE TABLE Votes(
        Id_event INT NOT NULL ,
        Id_user INT NOT NULL,
        
        CONSTRAINT Comments_PK PRIMARY KEY (Id_event,Id_user),
        
        CONSTRAINT Votes_Users_FK FOREIGN KEY (Id_event) REFERENCES Events(Id_event),
        CONSTRAINT Votes_Photos_FK FOREIGN KEY (Id_user) REFERENCES Users(Id_user)
)
ENGINE=InnoDB;