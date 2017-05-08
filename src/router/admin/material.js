/**
 * @author zail
 * @email zzzzail@163.com
 * @date 2017/5/8
 * @description 素材管理路由
 *
 */

const {isLogin} = require('../../controller/admin/publicController');
const {
	getMaterialForever,
	deleteMaterialForever,
	getMaterialList,
	getMaterialForeverUpload,
	postMaterialForeverUpload
} = require('../../controller/admin/materialController');

module.exports = router => {
	router.get('/material/forever', isLogin, getMaterialForever);
	router.delete('/material/forever', isLogin, deleteMaterialForever);
	router.get('/material/list', isLogin, getMaterialList);
	router.get('/material/forever/upload', isLogin, getMaterialForeverUpload);
	router.post('/material/forever/upload', isLogin, postMaterialForeverUpload)
}