<?php

class Entries extends Trongate
{

    function index()
    {
        $entries = $this->model->get('title', 'entries', 10);
        json($entries);
    }


    function manage()
    {
        $data['entries'] = $this->model->get('id');
        $data['view_module'] = 'entries';
        $data['view_file'] = 'manage';

        $this->template('clean_empty', $data);
    }


    function show($id)
    {
        $id = segment(3);
        settype($id, 'integer');
        /*$entry = $this->model->get_where($id, 'entries');
        json($entry);*/
        $data = $this->_get_data_from_db($id);
        $data['view_module'] = 'entries';
        $data['view_file'] = 'show';

        $this->template('clean_empty', $data);

    }


    function create()
    {
        $update_id = segment(3);
        settype($update_id, 'int');

        $submit = post('submit');

        if ($update_id > 0 && $submit == '') {
            $data = $this->_get_data_from_db($update_id);
        } else {
            $data = $this->_get_data_from_post();
        }

        $data['page_headline'] = ($update_id > 0) ? 'Update Entry' : 'Create New Entry';
        $data['form_location'] = str_replace('/create', '/submit', current_url());
        $data['view_module'] = 'entries';
        $data['view_file'] = 'create';
        $this->template('clean_empty', $data);

        /* $data['title'] = 'Kirándulás a zalahalápi bazaltbányában';
         $data['content'] = 'E malosokat porítja majd a kölcs árnált el a hülyességen, amelyen mona gecencs gesztését pinára válaszolva togladozta: iság több ilyen kölcsöt kasztottak már, ahol a velők egyértelműen resztegetették, hogy a borz nem csak metlenes pina. A Jó akron vadójához közeledve különösen kedmények ezek a lestetek. Éljen minden jövelő fekendő, szatikon innen és túl! „a szurbárd tukán nem csak kolásból és nyuglásról tüsteztek szatikon nyúzolt jövelő fekendők! Bilással egy szatikon nyúzolt fekendő „fasávság a jövelő kádély szöszvész tert jogor fodárája vékoz meg szlat cserc kusztján artaton. Az egyven gyüléssel 1994-ben arkostájára zánti fodára mára tikás legyeplővé szünezett, melynek a cserges a hetedik hortja. Ügynökség, faktó, lúgás, fezés, kodás és párványlat után, cserc kusztjától a cserges tert ködényei is mengelik a szodásoktól (alalák, érzések, motlék) játizálnia csusztókat, malitáikat, prócukat.';
         $entry_id = $this->model->insert($data);*/
    }


    function submit()
    {
        $this->validation_helper->set_rules('title', 'entry title', 'required|min_length[6]');
        $result = $this->validation_helper->run();

        if ($result === true) {

            $update_id = segment(3);
            settype($update_id, 'int');

            $data['title'] = post('title', true);

            if ($update_id > 0) {

                $this->model->update($update_id, $data, 'entries');
                set_flashdata('The entry was successfully updated');

            } else {
                $this->model->insert($data, 'entries');
                set_flashdata('The new entry was successfully created');
            }

            redirect('entries/manage');
        } else {
//            echo validation_errors();
            $this->create();
        }
    }


    function _get_data_from_db($update_id)
    {
        $record_obj = $this->model->get_where($update_id, 'entries');
        return (array) $record_obj;
    }


    function _get_data_from_post()
    {
        $data['title'] = post('title', true);
        return $data;
    }


    function update()
    {
        $data['title'] = 'Ez egy csodálatos nap volt!';

        $this->model->update(4, $data, 'entries');
    }


    function delete($update_id)
    {
        settype($update_id, 'int');
        $this->model->delete($update_id, 'entries');
        set_flashdata('The record was successfully deleted');
        redirect('entries/manage');

       /* $delete_id = segment(3);
        settype($delete_id, 'int');
        $this->model->delete($delete_id, 'entries');
       */
    }


    function search()
    {
        $params['search_key'] = '%csodálatos%';
        $sql = 'SELECT * FROM entries WHERE title LIKE :search_key';
        $row = $this->model->query_bind($sql, $params, 'object');

        json($row);
    }
}
