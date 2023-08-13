<?php


namespace Slvler\UnsplashService\Services;


class Photos extends Client
{
    CONST url = "photos/";
    CONST get_a_photo = "photos/";
    CONST get_a_random_photo = "photos/random";


    public function list_photos(array $params)
    {
        return $this->get(self::url.'?'.http_build_query($params));
    }

    public function get_a_photo(array $params)
    {
        return $this->get(self::get_a_photo.'?'.http_build_query($params));

        return $this->get(self::get_a_photo.$id);
    }

    public function get_a_random_photo(array $params)
    {
        return $this->get(self::url.'?'.http_build_query($params));
    }

    public function like_a_photo()
    {

    }

    public function unlike_a_photo()
    {

    }


}
