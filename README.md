TRAVEL AGENCY WEBSITE

1. **Description:-** A travel agency website which allows the user to make bookings for his/her trip.
1. **Tech stack used:-** 
- HTML
- CSS
- JavaScript
- Php
- SQL

**Tables Used in Database:-**

*Customers Table*

1. Email ID (Primary Key)
1. Name
1. Mobile Number
1. DOB
1. City/Town/Village
1. Password

*Customers Bookings Table*

1. `	`Email ID(Foreign Key from Customers Table)
1. Booking ID(Primary Key)
1. Date of Departure
1. Date of Return
1. No of days-Stay
1. From
1. Destination
1. Number of People

*Train Table*

1. Train ID
1. Seat ID
1. Source
1. Destination
1. Email ID(Foreign Key from Customers Table) if not set NULL
1. (Train ID, Seat ID) Primary Key

*Flights Table*

1. Flight ID
1. Seat ID
1. Source
1. Destination
1. Email ID(Foreign Key from Customers Table) if not set NULL
1. (Flight ID, Seat ID) Primary Key

*Buses Table*

1. `	`Bus ID
1. Seat ID
1. Source
1. Destination
1. Email ID(Foreign Key from Customers Table) if not set NULL
1. (Bus ID, Seat ID) Primary Key

*Hotels Table*

1. `	`Hotel ID
1. Room ID
1. Destination(Foreign Key from Customer Bookings)
1. Email ID(Foreign Key from Customers Table) if not set NULL
1. Check in date
1. Check out date

*ER Diagram*


![Aspose Words 0e0a10aa-3806-462a-8b93-738e017de712 001](https://user-images.githubusercontent.com/102985520/206653314-0d65de11-455b-4647-bba8-36165dab0a9d.jpeg)
![Aspose Words 0e0a10aa-3806-462a-8b93-738e017de712 002](https://user-images.githubusercontent.com/102985520/206653347-ffe96229-9eff-44c0-b959-d7b0b4ee5dc6.jpeg)

![](Aspose.Words.0e0a10aa-3806-462a-8b93-738e017de712.001.jpeg)

![](Aspose.Words.0e0a10aa-3806-462a-8b93-738e017de712.002.jpeg)



*Relational Schema*

![Aspose Words 0e0a10aa-3806-462a-8b93-738e017de712 003](https://user-images.githubusercontent.com/102985520/206653388-365b9bf7-9387-46f0-9004-842b629f99e7.jpeg)


![](Aspose.Words.0e0a10aa-3806-462a-8b93-738e017de712.003.jpeg)



*Functional Dependencies*


![Aspose Words 0e0a10aa-3806-462a-8b93-738e017de712 004](https://user-images.githubusercontent.com/102985520/206653440-498d3f77-4d15-46c5-a7a1-a0a13fd33029.jpeg)

![](Aspose.Words.0e0a10aa-3806-462a-8b93-738e017de712.004.jpeg)

*In Customers Table:-*

Email ID →Name, Email ID →Mobile, Email ID →D.O.B,

Email ID →City, Email ID →Password

*In Bookings Table:-*

Booking ID →Email ID, Booking ID →Date of Departure,

Booking ID → Date of Return, Booking ID →Source,

Booking ID →Destination,Booking ID →Number of People,

Booking ID →Days Stay

*In Trains Table:-*

(Train ID,Seat ID) →Source

(Train ID,Seat ID) →Destination

(Train ID,Seat ID) →Email

*In Flights Table:-*

(Flight ID,Seat ID) →Source

(Flight ID,Seat ID) →Destination

(Flight ID,Seat ID) →Email


*In Buses Table:-*

(Bus ID,Seat ID) →Source

(Bus ID,Seat ID) →Destination

(Bus ID,Seat ID) →Email


*In Hotel Table:-*

(Hotel ID,Seat ID) →Check in date

(Hotel ID,Seat ID) → Check out date

(Hotel ID,Seat ID) → Place

(Hotel ID,Seat ID) →Email


