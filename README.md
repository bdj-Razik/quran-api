
# Quran Api

This repo contains collection of Quran Translations and to allow development of websites, apps etc, it is structured in REST Architectural. The purpose of this repo is to spread the word of God everywhere in the world


## Installation

Install Quran API

```bash
  git clone https://github.com/bdj-Razik/quran-api.git
```

```bash
  copy .env.example file to .env on the root folder
```

```bash
  composer install
```


```bash
  php artisan key:generate
```

```bash
  run php artisan migrate
```

```bash
  run php artisan db:seed
```

```bash
  run php artisan serve
```

```bash
  http://127.0.0.1:8000/api/documentation#/
```
## API Reference

#### Get all Surah

```http
  GET /api/surates
```

#### Get Surah By Name

```http
  GET /api/surah_name/${search}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `search`      | `string` | **Required**. name of surah   |

 
#### Get Surah By Number

```http
  GET /api/surah_number/${search}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `search`      | `integer` | **Required**. number of surah|

 
#### Get all Ayat

```http
  GET /api/ayat
```


#### Get Ayah By Name

```http
  GET /api/ayah_name/${search}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `search`      | `string` | **Required**. name of ayah    |




#### Get Ayah By Number

```http
  GET /api/ayah_number/${search}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `search`      | `integer` | **Required**. number of ayah |