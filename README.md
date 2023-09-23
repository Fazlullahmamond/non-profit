# Non-Profit Larvel v10 FilamentPHP v3 Project

## Installation

First clone this repository, install the dependencies, and setup your .env file.

```
git clone git@github.com:Fazlullahmamond/non-profit.git non-profit
composer install
cp .env.example .env
```

Then create the necessary database.

```
php artisan db
create database non-profit
```

And run the initial migrations and seeders.

```
php artisan migrate
```

## Further Ideas
Here's some description for non-profit project created in Laravel v10 and FilamentPHP v3:
1. The project is developed using Laravel v10, a popular PHP framework known for its robustness, security, and scalability. It provides a solid foundation for building web applications.
2. FilamentPHP v3, a powerful admin panel package, is integrated into the project. It simplifies the development process by providing a user-friendly interface for managing the application's backend functionality.
3. The project offers CRUD (Create, Read, Update, Delete) operations for categories, appeals, blogs, works, and volunteers. This means that administrators can easily create, view, update, and delete records for each of these entities.
4. The application provides a comprehensive category management system. Administrators can create and manage different categories to organize the non-profit organization's initiatives, campaigns, projects, or any other relevant data.
5. A dedicated appeals management system is incorporated into the project. Administrators can create and manage fundraising appeals, enabling the non-profit organization to effectively raise funds for specific causes or projects.
6. The project includes a blogging system that allows administrators to create and manage blog posts. This feature enables the non-profit organization to share updates, news, stories, or any other relevant content with its audience.
7. The application integrates beautiful charts for data analysis. These charts provide visual representations of various metrics, such as donation amounts, volunteer participation, or project progress. They help administrators gain insights and make informed decisions based on the data.
Overall, your non-profit project built in Laravel v10 and FilamentPHP v3 offers a robust and user-friendly system for managing categories, appeals, blogs, works, volunteers, and provides insightful data analysis through visually appealing charts.
