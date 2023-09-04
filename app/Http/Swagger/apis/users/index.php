<?php

/**
 * @OA\Get(
 *  path="/users",
 *   tags={"User"},
 *   summary="Get all users",
 *   description="Get Users Data",
 * 
 * 
 *  @OA\Response(
 *         response=200,
 *         description="Successful operation",
 *         @OA\JsonContent(
 *              type="object",
 *              ref="#/components/schemas/User"
 *         ),
 *      ),
 *  @OA\Response(
 *     response=401,
 *     description="Unauthorized",
 *     @OA\JsonContent(
 *          type="object",
 *         ref="#/components/schemas/ApiResponseError"
 *      ),
 *   ),
 * )
 **/