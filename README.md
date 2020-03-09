<p align="center"><a href="https://twill.io" target="_blank"><img src="https://twill.io/logo.svg" width="400"></a></p>


## Made with Twill

This code repository is the project for the teaching series 'Made with Twill.'   
Each commit reflects the code created in the 
corresponding YouTube screencast.

- Commit: `basic installation`   
**[Simple setup](https://www.youtube.com/watch?v=XMG6RLeLyjU)**   
This episode explains how to set up a local development environment on your 
computer using Homestead & Vagrant, then install and configure Laravel & Twill. Any setup that uses a web server and 
database can be used. 
A good fit for any developer working on a Mac or Windows setup. This is just a quick start suggestion.

- Commit: `MWT: Episode 1`   
**[Made with Twill: Command line (1/5)](https://www.youtube.com/watch?v=W4ECg9ojLmQ)**   
We'll start getting familiar with the Twill command line and scaffold a module. Also, begin to explore 
how simple it is to configure a form and work with a module's repository class to integrate content into Blade templates.

- Commit: `MWT: Episode 2`   
**[Made with Twill: Form fields (2/5)](https://www.youtube.com/watch?v=0UMfmDKyHUs)**   
Adding more fields to our 'Project' model is straightforward, so we are exploring that. 
And adding a many to many tag relationship is even easier! Plus, organizing the presentation of our 
fields using convenient fieldsets.

- Commit: `MWT: Episode 3`   
**[Made with Twill: Block editor (3/5)](https://www.youtube.com/watch?v=kAcJ5G2GhiA)**   
A very empowering feature in Twill is the block editor. It gives options to an author to be inventive 
with the presentation while, at the same time, consistently manage data. We’ll create a new ‘Contributor’ 
module and explore the block editor.

- Commit: `MWT: Episode 4`   
**[Made with Twill: Connecting data (4/5)](https://www.youtube.com/watch?v=6x0zYhoea_4)**   
Laravel's Eloquent model has made it easier to work with 'one-to-many' and 'many to many' relationships. 
And now Twill has made it easy to administer these relationships with some powerful form options.

- Commit: `MWT: Episode 5`   
**[Made with Twill: Displaying content (5/5)](https://www.youtube.com/watch?v=9ZVtVTT7Jb4)**   
The final episode of the series focuses on getting data into blade templates. As a Laravel Developer, you are probably 
already familiar with many of these concepts. For displaying content, we are going to look at rendering blocks.


## Getting started

### Environment requirements
Twill is compatible with Laravel versions `5.6` to `7`, running on PHP 7.1 and above.

As a dependency to your own application, Twill shares Laravel's [server requirements](https://laravel.com/docs/6.x/installation#server-requirements), which are satisfied by both [Homestead](https://laravel.com/docs/7.x/homestead) and [Valet](https://laravel.com/docs/7.x/valet) during development, and easily deployed to production using [Forge](https://forge.laravel.com) and [Envoyer](https://envoyer.io) or [Envoy](https://laravel.com/docs/7.x/envoy), as well as any other Laravel compatible server configuration and deployment strategy.

Twill's database migrations create `json` columns. Your database should support the `json` type. Twill has been developed and tested against MySQL (`>=5.7`) and PostgreSQL(`>=9.3`).

In summary:

|            | Supported versions | Recommended version |
|:-----------|:------------------:|:-------------------:|
| PHP        | >= 7.1             | 7.4                 |
| Laravel    | >= 5.6             | 7                   |
| npm        | >= 5.7             | 6.13                |
| MySQL      | >= 5.7             | 5.7                 |
| PostgreSQL | >= 9.3             | 10                  |

## Setup local development environment

To setup our local environment we use [Laravel Homestead](https://laravel.com/docs/7.x/homestead).   
For a quickstart in setting up this particular project see [Per Project Installation](https://laravel.com/docs/7.x/homestead#per-project-installation).   
The YouTube video [Simple setup](https://www.youtube.com/watch?v=XMG6RLeLyjU) also takes you through a fresh install of Laravel &amp; Twill on Homestead. 



#### Homestead config

- Copy `Homestead.sample.yaml` to `Homestead.yaml`
- Change the IP at the top if you have another vagrant machine running at the same IP
- Install composer dependencies `composer install`. This step should be done inside the VM, but in order to get the VM running you need to install the dependencies.
- Provision your vagrant machine with `vagrant up`
- In case the system didn't update your `/etc/hosts` file automatically:
- Add the IP and domain defined at `Homestead.yaml` to your `/etc/hosts` file.


#### Application setup

- Hop into the VM with `vagrant ssh` and head into the osf folder in `/home/vagrant/code`
- Install Twill via composer with `composer require area17/twill:"^2.0"`
- Ensure dependencies are installed with `composer install`
- Copy `.env.example` as `.env` and update with your local settings (if necessary).
- Generate your application key: `php artisan key:generate`
- Migrate the database schema: `php artisan migrate`


#### Frontend build

To install dependencies run `npm ci`.
To build FE assets for dev run `npm run dev-grunt`.
To build FE assets for production run `npm run prod-grunt`.
