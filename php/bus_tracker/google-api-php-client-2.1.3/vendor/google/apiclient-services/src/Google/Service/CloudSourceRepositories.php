<?php
/*
 * Copyright 2016 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * Service definition for CloudSourceRepositories (v1).
 *
 * <p>
 * Access source code repositories hosted by Google.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/eap/cloud-repositories/cloud-sourcerepo-api" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_CloudSourceRepositories extends Google_Service
{
  /** View and manage your data across Google Cloud Platform services. */
  const CLOUD_PLATFORM =
      "https://www.googleapis.com/auth/cloud-platform";

  public $projects_repos;
  
  /**
   * Constructs the internal representation of the CloudSourceRepositories
   * service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://sourcerepo.googleapis.com/';
    $this->servicePath = '';
    $this->version = 'v1';
    $this->serviceName = 'sourcerepo';

    $this->projects_repos = new Google_Service_CloudSourceRepositories_Resource_ProjectsRepos(
        $this,
        $this->serviceName,
        'repos',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'v1/{+parent}/repos',
              'httpMethod' => 'POST',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => 'v1/{+name}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v1/{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'getIamPolicy' => array(
              'path' => 'v1/{+resource}:getIamPolicy',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resource' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v1/{+name}/repos',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'setIamPolicy' => array(
              'path' => 'v1/{+resource}:setIamPolicy',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resource' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'testIamPermissions' => array(
              'path' => 'v1/{+resource}:testIamPermissions',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resource' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
  }
}
