<?php
namespace Controller;

use Core\Controller;
use Exception;

class UserController extends Controller {

	/**
	 * @SWG\Get(
	 *     path="/users",
	 *     @SWG\Response(response="200", description="Successful operation")
	 * )
	 */
	public function find($req, $res, $args) {
		throw new Exception('Not yet implemented');
	}

	/**
	 * @SWG\Get(
	 *     path="/users/{id}",
     *     @SWG\Parameter(
     *         name="id",
     *         in="path",
     *         description="Id of the user",
     *         required=true,
     *         type="integer"
     *     ),
	 *     @SWG\Response(response="200", description="Successful operation"),
	 *     @SWG\Response(response="404", description="User not found")
	 * )
	 */
	public function findById($req, $res, $args) {
		throw new Exception('Not yet implemented');
	}

	/**
	 * @SWG\Post(
	 *     path="/users",
	 *     @SWG\Response(response="201", description="Successful operation"),
	 *     @SWG\Response(response="400", description="Invalid inputs supplied")
	 * )
	 */
	public function create($req, $res, $args) {
		throw new Exception('Not yet implemented');
	}

	/**
	 * @SWG\Put(
	 *     path="/users/{id}",
     *     @SWG\Parameter(
     *         name="id",
     *         in="path",
     *         description="Id of the user",
     *         required=true,
     *         type="integer"
     *     ),
	 *     @SWG\Response(response="204", description="Successful operation"),
	 *     @SWG\Response(response="400", description="Invalid id supplied"),
	 *     @SWG\Response(response="404", description="User not found")
	 * )
	 */
	public function updateById($req, $res, $args) {
		throw new Exception('Not yet implemented');
	}

	/**
	 * @SWG\Delete(
	 *     path="/users/{id}",
     *     @SWG\Parameter(
     *         name="id",
     *         in="path",
     *         description="Id of the user",
     *         required=true,
     *         type="integer"
     *     ),
	 *     @SWG\Response(response="204", description="Successful operation"),
	 *     @SWG\Response(response="400", description="Invalid id supplied"),
	 *     @SWG\Response(response="404", description="User not found")
	 * )
	 */
	public function deleteById($req, $res, $args) {
		throw new Exception('Not yet implemented');
	}

}
