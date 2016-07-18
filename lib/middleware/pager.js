
module.exports = function(){

    return function*(next){
        this.pager = {pageNum:this.query.pageNum?parseInt(this.query.pageNum):1,
                        pageSize:this.query.pageSize?parseInt(this.query.pageSize):10000};
                        
        yield next;
                        
    }
}